<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SocioNegocios;
use App\Direcciones;
use App\Contactos;

class  ClientsController extends Controller
{

    public function __construct()
    {
     $this->middleware('auth');
    }
//getsocios
    public function clients()
    {
        $socios = SocioNegocios::select('CodigoSN','Nombre','GrupoSN','RFC','CondicionesPago')->paginate(10);

    //dd($socios);
        return view('clients.clients')->with('Socios', $socios);
    }
//order the table
    public function orderby($filters){

      
    }
//search in socios
    public function search(){
        
       $CodigoSN =  ($_POST['codigosn'] != '') ? $_POST['codigosn']  : "N/A";
       $NombreSN =  ($_POST['name'] != '') ? $_POST['name']  : "N/A";
       $GrupoSN =  ($_POST['groupsn'] != '') ? $_POST['groupsn']  : "N/A";
       $CondicionesPago =  ($_POST['pay'] != '') ? $_POST['pay']  : "N/A";
       $RFC =  ($_POST['rfc'] != '') ? $_POST['rfc']  : "N/A";

       $socios = SocioNegocios::select('CodigoSN','Nombre','GrupoSN','RFC','CondicionesPago') 
                              ->where('CodigoSN','like','%'.$CodigoSN.'%')
                              ->orWhere('Nombre','like','%'.$NombreSN.'%')
                              ->orWhere('GrupoSN','like','%'.$GrupoSN.'%')
                              ->orWhere('RFC','like','%'.$CondicionesPago.'%')
                              ->orWhere('CondicionesPago','like','%'.$RFC.'%')
                              ->paginate(10);

        return view('clients.clients')->with('Socios', $socios);
       // dd($socios);
    }
   //details
    public function details($id){
        
        $socios = SocioNegocios::select('CodigoSN'
                                        ,'Tipo'
                                        ,'Nombre'
                                        ,'NombreExtranjero'
                                        ,'GrupoSN'
                                        ,'RFC'
                                        ,'Moneda'
                                        ,'Tel1'
                                        ,'Tel2'
                                        ,'Celular'
                                        ,'Fax'
                                        ,'Email'
                                        ,'SitioWeb'
                                        ,'CondicionesPago'
                                        ,'Vendedor'
                                        ,'LineaCredito'
                                        ,'Saldo'
                                        ,'DocumentosAbiertos'
                                        ,'SaldoVencido') 
                              ->where('CodigoSN','=',$id)
                              ->first();

          $direction = Direcciones::select('IdDireccion'
                                          ,'TipoDireccion'
                                          ,'Calle'
                                          ,'NumeroExterior'
                                          ,'Colonia'
                                          ,'CP'
                                          ,'Ciudad'
                                          ,'Pais'
                                          ,'Estado'
                                          ,'Impuesto')
                                    ->where('CodigoSN','=',$id)
                                    ->get();

          $contacto = Contactos::select('IdContacto'
                                      ,'Nombre'
                                      ,'SegundoNombre'
                                      ,'Apellido'
                                      ,'Tel1'
                                      ,'Tel2'
                                      ,'Celular'
                                      ,'Email'
                                      ,'Comentarios1'
                                      ,'Comentarios2')
                                    ->where('CodigoSN','=',$id)
                                    ->get();

    return view('clients.details')->with('Socios', $socios)
                                  ->with('direcciones',$direction)
                                  ->with('contactos',$contacto);
    }


    public function autocomplet($string){
        
    }


}
