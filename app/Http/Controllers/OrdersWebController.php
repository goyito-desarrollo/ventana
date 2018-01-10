<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\SocioNegocios;
use App\PedidoWeb;
use App\Articulos;
use App\ArticulosAlmacen;
use App\DetallePedidoWeb;
use App\Cotizaciones;
use App\DetalleCotizacion;
use App\Contactos;
use App\Direcciones;
use App\UserVentana;
use DB;

class  OrdersWebController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
//
    public function ordersWeb()
    {

          $Cotizaciones = PedidoWeb::select('PKPedido'
                                            ,'Sucursal'
                                            ,'FolioWeb'
                                            ,'FolioSap'
                                            ,'Fecha'
                                            ,'Referencia'
                                            ,'Total'
                                            ,'FKCliente'
                                            ,'Paqueteria'
                                            ,'Estatus')
                                      ->get();

          foreach ($Cotizaciones as $value) {
            # code...
            $user = UserVentana::where('User','=',$value->FKCliente)->first(); 

            $value->Nombre = $user->Nombre;
            $value->Apellido = $user->Apellido;

          }

//dd($Cotizaciones);

        return view('ordersWeb.ordersWeb')->with('cotizaciones',$Cotizaciones);
    }
//
    public function newOrders()
    {

      $user = Auth::user();

      $userR = UserVentana::where('User','=',$user->FKuser)->first();

        return view('ordersWeb.newOrders')->with('user',$userR);
    }
//
    public function seeOrders()
    {
        return view('ordersWeb.seeOrders');
    }
//
    public function setquote(){
 $id = $_POST['query'];  
 //dd($id);  
 $PKSocio = explode(" ",$id);
 $user = Auth::user();
 /*$socios = SocioNegocios::select('id')
                        ->where('IV_VV_SociosNegocios.CodigoSN',$id)
                        ->join('USERS','USERS.CodigoSN','=','IV_VV_SociosNegocios.CodigoSN') ->first();*/  
 $folioWeb = $this->folio();

        $pedido                = new PedidoWeb();
        $pedido->Sucursal      = 'N/A';
        $pedido->FolioSap         = 'borrador'; 
        $pedido->FolioWeb      = $folioWeb; 
        $pedido->FKCliente     = $user->FKuser;
        $pedido->FKSocionegocios = $PKSocio[0];
        $pedido->Fecha         = date("Y-m-d");
        $pedido->Referencia    ='N/A';
        $pedido->Paqueteria    = 'N/A';
        $pedido->Estatus       = 0;
        $pedido->Total         = 0;
        $pedido->Estatus       = 0;
        $pedido->Subtotal      = 0;
        $pedido->save();  

        $idc = PedidoWeb::orderBy('PKPedido','desc')->first();


         return redirect('pedido/'.$idc->PKPedido);
    }

  public function convert($id){

 $user = Auth::user();
 $folioWeb = $this->folio();
 $Cotizacion = Cotizaciones::where('PKPedido','=',$id)->first();

        $pedido               = new PedidoWeb();
        $pedido->Sucursal      = $Cotizacion->Sucursal;
        $pedido->FolioWeb         = $folioWeb; 
        $pedido->FolioSap         = 'borrador'; 
        $pedido->Fecha         = date("Y-m-d");
        $pedido->FKSocionegocios = $Cotizacion->FKSocionegocios;
        $pedido->FKCliente     = $user->FKuser;
        $pedido->Referencia    = $Cotizacion->Referencia;
        $pedido->Paqueteria    = 'N/A';
        $pedido->Estatus       = 0;
        $pedido->Total         = $Cotizacion->Total;
        $pedido->Subtotal      = $Cotizacion->Subtotal;
        $pedido->save(); 

         $idp = PedidoWeb::orderBy('PKPedido','desc')->first();

         dd($idp);
 
  $detalleCotizacion = DetalleCotizacion::where('FKCotizacion','=',$id)->get();

   foreach ($detalleCotizacion as $value) {
       # code...
      $detallePedido = new DetallePedidoWeb();
      $detallePedido->FKPedidoWeb = $idp->PKPedido;
      $detallePedido->FKArticulo = $value->FKArticulo;
      $detallePedido->Cantidad = $value->Cantidad;
      $detallePedido->Almacen = $value->Almacen;
      $detallePedido->Precio = $value->Precio;
      $detallePedido->save();

   }

 return true;
  }
  ///////
  public function getquote($id){
 $cotizacion = PedidoWeb::select('PKPedido'
                                     ,'Sucursal'
                                     ,'FolioWeb'
                                     ,'FolioSap'
                                     ,'Fecha'
                                     ,'FKSocionegocios'
                                     ,'FKCliente'
                                     ,'Referencia'
                                     ,'Total'
                                     ,'Subtotal'
                                     ,'PedidoWeb.Vendedor'
                                     ,'Comentario'
                                     ,'ComentarioInterno'
                                     ,'FKDireccion')
                        ->where('PKPedido',$id)->first();  

 $client = SocioNegocios::select('CodigoSN'
                                ,'Nombre'
                                ,'LineaCredito'
                                ,'Saldo'
                                ,'SaldoVencido'
                                ,'Vendedor'
                                ,'CondicionesPago'
                                ,'Moneda') 
                       ->where('CodigoSN',$cotizacion->FKSocionegocios)->first(); 

 $contacto = Contactos::select('CodigoSN'
                              ,'IdContacto')
                        ->where('CodigoSN',$cotizacion->FKSocionegocios)->get();

 $direccion = Direcciones::select('CodigoSN'
                                 ,'IdDireccion'
                                 ,'Calle'
                                 ,'NumeroExterior'
                                 ,'Colonia'
                                 ,'CP'
                                 ,'Ciudad'
                                 ,'Pais'
                                 ,'Estado'
                                 ,'Impuesto')
                          ->where('CodigoSN',$cotizacion->FKSocionegocios)->get();

 $user = UserVentana::where('User','=',$cotizacion->FKCliente)->first();

         return view('ordersWeb.editOrders')
         ->with('cotizacion',$cotizacion)
         ->with('client',$client)
         ->with('contact',$contacto)
         ->with('direccion',$direccion)
         ->with('user',$user);

       }
//////
public function create($id){

 $lines = 0;
 $cantidad = 0;

 $cotizacion = PedidoWeb::select('PKPedido'
                                     ,'Sucursal'
                                     ,'FolioWeb'
                                     ,'FolioSap'
                                     ,'Fecha'
                                     ,'FKSocionegocios'
                                     ,'FKCliente'
                                     ,'Referencia'
                                     ,'Total'
                                     ,'Subtotal'
                                     ,'PedidoWeb.Vendedor'
                                     ,'Comentario'
                                     ,'ComentarioInterno'
                                     ,'FKDireccion')
                        ->where('PKPedido',$id)->first(); 


         $client = SocioNegocios::select('CodigoSN'
                                ,'Nombre'
                                ,'LineaCredito'
                                ,'Saldo'
                                ,'SaldoVencido'
                                ,'Vendedor'
                                ,'CondicionesPago'
                                ,'Moneda') 
                       ->where('CodigoSN',$cotizacion->FKSocionegocios)->first(); 

        $detail = DetallePedidoWeb::select('PKDetallePedidoWeb'
                                           ,'FKArticulo'
                                           ,'Cantidad'
                                           ,'Precio'
                                           ,'Almacen')
                                    ->where('FKPedidoWeb','=',$id)
                                    ->get();

      $direccion = Direcciones::select('CodigoSN'
                                 ,'IdDireccion'
                                 ,'Calle'
                                 ,'NumeroExterior'
                                 ,'Colonia'
                                 ,'CP'
                                 ,'Ciudad'
                                 ,'Pais'
                                 ,'Estado'
                                 ,'Impuesto')
                          ->where('CodigoSN',$cotizacion->FKSocionegocios)->get();

        foreach ($detail as $value) {
            # code...
$arti = Articulos::select('NombreArticulo')->where('CodigoArticulo','=',$value->FKArticulo)->first();
$value->Name = $arti->NombreArticulo;

$lines += 1;
$cantidad += $value->Cantidad;
        }

$user = UserVentana::where('User','=',$cotizacion->FKCliente)->first();
//dd($detail);

         return view('ordersWeb.detailOrders')
         ->with('cotizacion',$cotizacion)
         ->with('client',$client)
         ->with('details',$detail)
         ->with('lines',$lines)
         ->with('cantidad',$cantidad)
         ->with('direccion',$direccion)
         ->with('user',$user);

       }
//////
///// 
private function folio(){
   
  $fecha = date("Ymd");

  $folio = PedidoWeb::select('PKPedido')->orderBy('PKPedido','desc')->first();

  $folioid = $folio->PKPedido;
  $folioid++;
  
  return $fecha."-".$folioid;


}

public function changeUser(){

PedidoWeb::where('PKPedido','=',$_POST['socn'])
            ->update(['FKSocionegocios' =>$_POST['soc']]);

return redirect('pedidop/'.$_POST['socn']);
}

public function delete($id){

  DetallePedidoWeb::where('FKPedidoWeb','=',$id)->delete();
  PedidoWeb::where('PKPedido','=',$id)->delete();

  return redirect('/ordersWeb');

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

    $detail = new DetallePedidoWeb();
    $detail->FKPedidoWeb = $idC;
    $detail->FKArticulo = $product;
    $detail->Cantidad = $cant;
    $detail->Almacen = $articulo->CodigoAlmacen;
    $detail->Precio = $articulo->Precio;
    $detail->save();

$cotiza = DetallePedidoWeb::select('Cantidad','Precio')->where('FKPedidoWeb','=',$idC)->get();

$Subtotal = 0;

foreach ($cotiza as $value) {
    # code...
   $Subtotal += $value->Cantidad * $value->Precio;
}


PedidoWeb::where('PKPedido','=',$idC)
            ->update(['Subtotal' =>$Subtotal
                     ,'Total' => $Subtotal
                     ,'Estatus' => 1]);

  return redirect('pedidop/'.$idC);
}

public function deleteA($id,$Articulo){

 $Subtotal = 0;

  DetallePedidoWeb::where('FKPedidoWeb','=',$id)
                  ->where('PKDetallePedidoWeb','=',$Articulo)->delete();

  $detalles = DetallePedidoWeb::where('FKPedidoWeb','=',$id)->get();

if(empty($detalles))
{
  PedidoWeb::where('PKPedido','=',$id)->update(['Total' => 0,'Subtotal' => 0 ]);
}

else
{
     foreach ($detalles as $value) {
     # code...
      $Subtotal += $value->Cantidad * $value->Precio;
     }

PedidoWeb::where('PKPedido','=',$id)->update(['Total' => $Subtotal,'Subtotal' => $Subtotal ]); 
}
  
  return redirect('/pedidop/'.$id);

}

public function refreshCantidad(){

$Subtotal = 0;

DetallePedidoWeb::where('PKDetallePedidoWeb','=',$_POST['articulc'])
            ->update(['Cantidad' =>$_POST['cant']]);

$detalles = DetallePedidoWeb::where('FKPedidoWeb','=',$_POST['id'])->get();


     foreach ($detalles as $value) {
     # code...
      $Subtotal += $value->Cantidad * $value->Precio;
     }

PedidoWeb::where('PKPedido','=',$_POST['id'])->update(['Total' => $Subtotal,'Subtotal' => $Subtotal ]); 

     return redirect('/pedidop/'.$_POST['id']);         
 
}

public function register($id,$coment,$comentInt,$direc){

PedidoWeb::where('PKPedido','=',$id)
          ->update(['Comentario' => $coment,'ComentarioInterno' => $comentInt]);

  exit;

}

}
