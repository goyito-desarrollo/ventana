<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\SocioNegocios;
use App\Cotizaciones;
use App\Articulos;
use App\ArticulosAlmacen;
use App\DetalleCotizacion;
use DB;

class  QuotesController extends Controller
{

public function __construct(){
  $this->middleware('auth');
    }
//////
public function quotes(){
        $Cotizaciones = Cotizaciones::select('PKCotizacion'
                                            ,'Sucursal'
                                            ,'Folio'
                                            ,'Fecha'
                                            ,'Referencia'
                                            ,'Total'
                                            ,'FKCliente'
                                            ,'Estatus')
                                      ->get();

        return view('quotes.quotes')->with('cotizaciones',$Cotizaciones);
    }
//////
public function newQuotes(){
        return view('quotes.newQuotes');
    }
//////
public function getUsers($id){
        
     $socios = SocioNegocios::select('CodigoSN')->where('CodigoSN','like','%'.$id.'%')->get();
     $client = array();

       foreach ($socios as $value) {
           # code...
        $client[] = $value->CodigoSN;
       }

        return $client;
    }
//////
public function setquote(){
 $id = $_POST['query'];    
 $user = Auth::user();
 /*$socios = SocioNegocios::select('id')
                        ->where('IV_VV_SociosNegocios.CodigoSN',$id)
                        ->join('USERS','USERS.CodigoSN','=','IV_VV_SociosNegocios.CodigoSN') ->first();*/  

        $cotizacion                = new Cotizaciones();
        $cotizacion->Sucursal      = 'N/A';
        $cotizacion->Folio         = 'borrador'; 
        $cotizacion->FKCliente     = $user->FKuser;
        $cotizacion->FKSocionegocios = $id;
        $cotizacion->Fecha         = date("Y-m-d");
        $cotizacion->Referencia    ='N/A';
        $cotizacion->Total         = 0;
        $cotizacion->Estatus       = 0;
        $cotizacion->Subtotal      = 0;
        $cotizacion->save();  

        $idc = Cotizaciones::orderBy('PKCotizacion','desc')->first();


         return redirect('cotizacion/'.$idc->PKCotizacion);
    }
//////
public function getquote($id){
 $cotizacion = Cotizaciones::select('PKCotizacion'
                                     ,'Sucursal'
                                     ,'Folio'
                                     ,'Fecha'
                                     ,'FKSocionegocios'
                                     ,'FKCliente'
                                     ,'Referencia'
                                     ,'Total'
                                     ,'Subtotal'
                                     ,'Cotizaciones.Vendedor'
                                     ,'Comentario'
                                     ,'ComentarioInterno'
                                     ,'FKDireccion')
                        ->where('PKCotizacion',$id)->first();  

 $client = SocioNegocios::select('CodigoSN'
                                ,'Nombre'
                                ,'LineaCredito'
                                ,'Saldo'
                                ,'SaldoVencido'
                                ,'Vendedor'
                                ,'CondicionesPago'
                                ,'Moneda') 
                       ->where('CodigoSN',$cotizacion->FKSocionegocios)->first(); 

         return view('quotes.editQuotes')
         ->with('cotizacion',$cotizacion)
         ->with('client',$client);
       }
//////
public function create($id){

 $lines = 0;
 $cantidad = 0;

 $cotizacion = Cotizaciones::select('PKCotizacion'
                                     ,'Sucursal'
                                     ,'Folio'
                                     ,'Fecha'
                                     ,'FKSocionegocios'
                                     ,'FKCliente'
                                     ,'Referencia'
                                     ,'Total'
                                     ,'Subtotal'
                                     ,'Cotizaciones.Vendedor'
                                     ,'Comentario'
                                     ,'ComentarioInterno'
                                     ,'FKDireccion')
                        ->where('PKCotizacion',$id)->first(); 


         $client = SocioNegocios::select('CodigoSN'
                                ,'Nombre'
                                ,'LineaCredito'
                                ,'Saldo'
                                ,'SaldoVencido'
                                ,'Vendedor'
                                ,'CondicionesPago'
                                ,'Moneda') 
                       ->where('CodigoSN',$cotizacion->FKSocionegocios)->first(); 

        $detail = DetalleCotizacion::select('FKArticulo'
                                           ,'Cantidad'
                                           ,'Precio'
                                           ,'Almacen')
                                    ->where('FKCotizacion','=',$id)
                                    ->get();

        foreach ($detail as $value) {
            # code...
$arti = Articulos::select('NombreArticulo')->where('CodigoArticulo','=',$value->FKArticulo)->first();
$value->Name = $arti->NombreArticulo;

$lines += 1;
$cantidad += $value->Cantidad;
        }

//dd($detail);

         return view('quotes.detailQuotes')
         ->with('cotizacion',$cotizacion)
         ->with('client',$client)
         ->with('details',$detail)
         ->with('lines',$lines)
         ->with('cantidad',$cantidad);
       }
//////
public function getProduct($id){

$articulos = Articulos::select('CodigoArticulo')->where('CodigoArticulo','like','%'.$id.'%')->take(10)->get();

     $articulo = array();

       foreach ($articulos as $value) {
           # code...
        $articulo[] = $value->CodigoArticulo;
       }

        return $articulo;
 
}
//////
public function addProduct(){

  $articuloA = array();
  $socio = $_POST['socio'];
  $product = $_POST['product'];
    $socioD = SocioNegocios::select('IdListaPrecios'
                                   ,'Moneda'
                                   ,DB::raw('(CASE WHEN AlmacenPred IS NULL THEN 1 ELSE AlmacenPred END) AS Almacen')
                                    )
                            ->where('CodigoSN','=',$socio)
                            ->first();

    //dd($socioD);

    $articulo = ArticulosAlmacen::select('IV_VV_ArticulosxAlmacen.CodigoArticulo'
                                        ,'CodigoAlmacen'
                                        ,'Stock'
                                        ,'NombreAlmacen'
                                        ,'NombreArticulo'
                                        ,'Precio'
                                        )
                                 ->join('IV_VV_A_Precios','IV_VV_A_Precios.CodigoArticulo','=','IV_VV_ArticulosxAlmacen.CodigoArticulo')
                                 ->where('IdListaPrecios','=',$socioD->IdListaPrecios)
                                 ->where('IV_VV_ArticulosxAlmacen.CodigoArticulo','=', $product)
                                 ->where('CodigoAlmacen','=',$socioD->Almacen)
                                 ->get();


foreach ($articulo as $value) {
           # code...
        $articuloA['CodigoArticulo'] = $value->CodigoArticulo;
        $articuloA['CodigoAlmacen'] = $value->CodigoAlmacen;
        $articuloA['Stock'] = $value->Stock;
        $articuloA['NombreAlmacen'] = $value->NombreAlmacen;
        $articuloA['NombreArticulo'] = $value->NombreArticulo;
        $articuloA['Precio'] = number_format($value->Precio,2,".",",")." ".$socioD->Moneda;
       }

  header('Content-Type: text/html; charset=UTF-8');
  return json_encode($articuloA);
}

public function InsertProduct($socio,$product,$cant,$idC){

    $socioD = SocioNegocios::select('IdListaPrecios'
                                   ,'Moneda'
                                   ,DB::raw('(CASE WHEN AlmacenPred IS NULL THEN 1 ELSE AlmacenPred END) AS Almacen')
                                    )
                            ->where('CodigoSN','=',$socio)
                            ->first();

    //dd($socioD);

    $articulo = ArticulosAlmacen::select('IV_VV_ArticulosxAlmacen.CodigoArticulo'
                                        ,'CodigoAlmacen'
                                        ,'Stock'
                                        ,'NombreAlmacen'
                                        ,'NombreArticulo'
                                        ,'Precio'
                                        )
                                 ->join('IV_VV_A_Precios','IV_VV_A_Precios.CodigoArticulo','=','IV_VV_ArticulosxAlmacen.CodigoArticulo')
                                 ->where('IdListaPrecios','=',$socioD->IdListaPrecios)
                                 ->where('IV_VV_ArticulosxAlmacen.CodigoArticulo','=', $product)
                                 ->where('CodigoAlmacen','=',$socioD->Almacen)
                                 ->first();

    $detail = new DetalleCotizacion();
    $detail->FKCotizacion = $idC;
    $detail->FKArticulo = $product;
    $detail->Cantidad = $cant;
    $detail->Almacen = $articulo->CodigoAlmacen;
    $detail->Precio = $articulo->Precio;
    $detail->save();

$cotiza = DetalleCotizacion::select('Cantidad','Precio')->get();
$Subtotal = 0;

foreach ($cotiza as $value) {
    # code...
   $Subtotal += number_format($value->Cantidad * $value->Precio,2,".",",");
}

Cotizaciones::where('PKCotizacion','=',$idC)
            ->update(['Subtotal' =>$Subtotal
                     ,'Total' => $Subtotal
                     ,'Estatus' => 1]);

  return redirect('cotizacionP/'.$idC);
}

public function addCotizacion($id){

Cotizaciones::where('PKCotizacion','=',$id)
            ->update(['Estatus' => 2]);

redirect('/cotizaciones');

}

public function delete($id){

  DetalleCotizacion::where('FKCotizacion','=',$id)->delete();
  Cotizaciones::where('PKCotizacion','=',$id)->delete();

  return redirect('/pedidos');

}

public function changeUser(){

Cotizaciones::where('PKCotizacion','=',$_POST['socn'])
            ->update(['FKSocionegocios' =>$_POST['soc']]);

return redirect('cotizacionP/'.$_POST['socn']);
}
    
public function finish($id){
  $lines = 0;
 $cantidad = 0;

 $cotizacion = Cotizaciones::select('PKCotizacion'
                                     ,'Sucursal'
                                     ,'Folio'
                                     ,'Fecha'
                                     ,'FKSocionegocios'
                                     ,'FKCliente'
                                     ,'Referencia'
                                     ,'Total'
                                     ,'Subtotal'
                                     ,'Cotizaciones.Vendedor'
                                     ,'Comentario'
                                     ,'ComentarioInterno'
                                     ,'FKDireccion')
                        ->where('PKCotizacion',$id)->first(); 


         $client = SocioNegocios::select('CodigoSN'
                                ,'Nombre'
                                ,'LineaCredito'
                                ,'Saldo'
                                ,'SaldoVencido'
                                ,'Vendedor'
                                ,'CondicionesPago'
                                ,'Moneda') 
                       ->where('CodigoSN',$cotizacion->FKSocionegocios)->first(); 

        $detail = DetalleCotizacion::select('FKArticulo'
                                           ,'Cantidad'
                                           ,'Precio'
                                           ,'Almacen')
                                    ->where('FKCotizacion','=',$id)
                                    ->get();

        foreach ($detail as $value) {
            # code...
$arti = Articulos::select('NombreArticulo')->where('CodigoArticulo','=',$value->FKArticulo)->first();
$value->Name = $arti->NombreArticulo;

$lines += 1;
$cantidad += $value->Cantidad;
        }

//dd($detail);

         return view('quotes.finish')
         ->with('cotizacion',$cotizacion)
         ->with('client',$client)
         ->with('details',$detail)
         ->with('lines',$lines)
         ->with('cantidad',$cantidad);
}

}
