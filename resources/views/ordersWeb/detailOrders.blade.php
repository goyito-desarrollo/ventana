@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Nuevo Pedido</div>
            <div class="panel-body">
             <!--icono regresar-->
                  <a href="/ordersWeb">
                         <i data-toggle="tooltip" data-placement="left" title="Regresar" class="fa fa-reply fa-2x" style="color:black;"></i>
                  </a>&nbsp &nbsp
                <!--  icono documento -->
                  <a href="/pedido/{{$cotizacion->PKPedido}}">
                <i data-toggle="tooltip" data-placement="left" title="Inicio Documento" class="fa fa-file-text-o fa-2x" style="color:#2ECC71;"aria-hidden="true"></i>
                  </a>&nbsp &nbsp
               <!--icono buscar por codigo-->
                   <a href="#">
                <i data-toggle="tooltip" data-placement="left" title="Buscar por Codigo o Descripcion" class="fa fa-barcode fa-2x" style="color:black;"aria-hidden="true"></i>
                  </a>&nbsp &nbsp
                    <!--icono buscar por multiplespalabras-->
                   <a href="#">
                <i data-toggle="tooltip" data-placement="left" title="Buscar por Multiples palabras" class="fa fa-keyboard-o fa-2x" style="color:black;"aria-hidden="true"></i>
                  </a>&nbsp &nbsp
                    <!--icono cambiar usuario-->
                    
                   <!--icono cancelar-->
                  <a href="#" id="cancel">
                         <i data-toggle="tooltip" data-placement="left" title="Eliminar Cotizacion" class="fa fa-ban fa-2x"  style="color:red;"></i>
                 </a><br class="visible-xs"><br class="visible-xs">
        </div>
        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading header">
                  <span class="fa fa-user-circle-o fa-2x" ></span>&nbsp Datos del Cliente
                 
              </div>
              <div class="panel-body">
                <div class="form-vertical">
                    
                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="sel1">Empresa</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="formselector">
                                    <option value="form1">Pulido</option>
                                </select>
                            </div>
                      </div>
                      <!--Primer formulario-->
                      <div id="form1" class="txtForm" > 
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Folio</label>
                             <div class="col-sm-8">
                                 <p>{{$cotizacion->FolioWeb}}</p>
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Fecha</label>
                             <div class="col-sm-8">
                                <p>{{$cotizacion->Fecha}}</p>
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Usuario</label>
                             <div class="col-sm-8">
                                <p>{{$user->Nombre}} {{ $user->Apellido }}</p>
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Codigo SN</label>
                             <div class="col-sm-8 ">                            
                                 <div class="input-group" >
                                      <p id="lblCodigo" style="color:blue">{{$client->CodigoSN}}</p>
                                 </div> 
                             </div>
                          </div>
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Nombre</label>
                             <div class="col-sm-8">
                                <p id="lblNameU" style="color:blue">{{$client->Nombre}}</p>
                             </div>
                          </div>
                          
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Límite de Crédito</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblLimitCredit"> 
                                {{ number_format($client->LineaCredito,2) }}</p>
                             </div>
                          </div>
                          
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Saldo</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblSaldo"> {{ number_format($client->Saldo,2) }}</p>
                             </div>
                          </div>
                          
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Saldo Vencido</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblSaldoVencido"> {{ number_format($client->SaldoVencido,2) }}</p>
                             </div>
                          </div>

                           <div class="form-group ">
                             <label class="col-sm-4 control-label">Vendedor Asignado</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblVendedor">{{ $client->Vendedor }}</p>
                             </div>
                          </div>
                      </div>
           
                </div>
              </div>
            </div>
          </div>
  <div class="col-xs-12 col-sm-12 col-md-12">

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="pro">
  <div class="modal-dialog modal-lg" role="document">
   <div class="modal-content"> 
   <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> <h4 class="modal-title" id="myLargeModalLabel">Agregar</h4> </div>
    <div class="modal-body">
     <form id="frmProduct" method="POST">
      <div class="input-group" id="searchPro">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input type="hidden" name="socio" id="socio" value="{{$client->CodigoSN}}">
        <input type="hidden" name="coti" id="coti" value="{{$cotizacion->PKPedido}}">
   <input type="text" id="product" name="product" class="form-control" placeholder="Agregar Productos" autofocus>
      <span class="input-group-btn">
        <button class="btn btn-default" id="getproduct" type="button">Buscar</button>
      </span>
    </div><!-- /input-group -->

    <div id="ProductA" hidden>
     <h4> <strong>  Codigo: </strong> <span id="code"> </span></h4>
     <h4> <strong>  Nombre: </strong> <span id="nameA"> </span></h4>
    </div><!-- /input-group -->

    </form>
    </div> 
 <div class="modal-footer" id="footer" hidden>
   <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="col-xs-12 col-sm-12 col-md-3" style="margin-bottom: 10px">
 <form id="frmProduct" action="/cotizacion" method="POST">
      <div class="input-group">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="number" id="cant" name="cant" class="form-control" 
   placeholder="Cantidad">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="refreshC"><i class="fa fa-refresh" aria-hidden="true"></i></button>
      </span>
    </div><!-- /input-group -->
    </form>
  </div>

    <div class="col-xs-12 col-sm-12 col-md-3">

 <table class="table table-condensed">
       <tr>
        <td><strong> Almacen :</strong></td>
        <td id="txtAlmacen"></td> 
       </tr>
        <tr>
        <td><strong>Existencia :</strong></td>
        <td id="txtExistencia"></td> 
       </tr>

       <tr>
      <td><strong>Precio :</strong></td>
      <td id="txtPrecio"> </td> 
       </tr>
      </table>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3">
 <table style="margin-top: 5px;" class="table table-condensed">
       <tr>
        <td><strong>Subtotal :</strong></td>
        <td id="txtSubtotal"></td> 
       </tr>
        <tr>
        <td><strong>Iva :</strong></td>
        <td id="txtIva"></td> 
       </tr>
       <tr>
      <td><strong>Total:</strong></td>
      <td id="txtTotal"></td> 
       </tr>
      </table>
      </div>

       <div class="col-xs-12 col-sm-12 col-md-3">
    <div class="col-xs-12 col-sm-12 col-md-6">

  <i data-toggle="tooltip" id="insertD" data-placement="left" title="Agregar" class="fa fa-shopping-cart fa-2x"  style="color:black;"></i>
  </div>
   <div class="col-xs-12 col-sm-12 col-md-6">
 <i data-toggle="tooltip" id="quit" data-placement="left" title="Eliminar" class="fa fa-ban fa-2x"  style="color:red;">   
 </i>
</div>
      </div>

    </div>
 </div>
    </div>
  </div>
</div>
</div>
		<div class="col-xs-12 col-sm-12 col-md-12">

    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Agregar Productos</button>

            <div style="margin-top:15px;" class="panel panel-primary">
              <div class="panel-heading header">Articulos <span class="fa fa-cog"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                   <table class="table table-striped">
                     <thead> 
                     <tr> 
                     <th>Eliminar</th>
                     <th>Codigo</th>
                     <th>Articulo</th>
                     <th>Almacen</th> 
                     <th>Cantidad</th> 
                     <th>Precio</th> 
                     </tr> 
                     </thead>
                     <tbody> 
                     @foreach($details as $detail)
                       <tr>
                       <td><a href="/eliminarArticulo/{{$cotizacion->PKPedido}}/{{$detail->PKDetallePedidoWeb}}" class="deleteA"> <i data-toggle="tooltip" data-placement="left" title="Eliminar Articulo" class="fa fa-ban fa-2x"  style="color:red;"></i>
                       </a></td>
                       <td>
                        {{ $detail->FKArticulo }}
                        <input type="hidden" name="articul" id="articul" value="{{$detail->PKDetallePedidoWeb}}">
                       </td>
                       <td>
                         {{ $detail->Name }}
                       </td>
                       <td>
                         {{ $detail->Almacen }}
                       </td>
                         <td  width="120px">
                            <form method="POST" action="/cambiarcantidad">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="input-group">
         <input type="hidden" name="articulc" id="articulc" value="{{$detail->PKDetallePedidoWeb}}">
           <input type="hidden" name="id" id="id" value="{{$cotizacion->PKPedido}}">
   <input type="number" id="cant" name="cant" class="form-control" 
    value="{{$detail->Cantidad }}" >
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i></button>
      </span>
    </div>
          </form>
                       </td>
                         <td>
                       {{ $detail->Precio }}
                       </td>
                       </tr>
                     @endforeach
                     </tbody>
                  </table>
                </div>

    <div class="col-xs-12 col-sm-12 col-md-3">
     <h5> Total de lineas: {{ $lines }}</h5>
     <h5> Cantidad Total:  {{ $cantidad }} </h5> 
    </div>

  <div class="col-xs-12 col-sm-12 col-md-3 pull-right">
<table style="margin-top: 5px;" class="table table-condensed">
       <tr>
<td style="text-align: right;"><strong>Subtotal : </strong>{{number_format($cotizacion->Subtotal,2)}} {{ $client->Moneda}}</td>
        <td id="txtSubtotal"></td> 
       </tr>
        <tr>
<td style="text-align: right;"><strong>Iva : </strong> {{ $cotizacion->Subtotal * .16 }} {{ $client->Moneda}} </td>
        <td id="txtIva"></td> 
       </tr>
       <tr>
<td style="text-align: right;"><strong>Total: </strong> {{number_format($cotizacion->Total,2)}} {{ $client->Moneda}}</td>
      <td id="txtTotal"></td> 
       </tr>
      </table>
      </div>
<div class="col-md-12">
 <button type="button"
 id="registrar" class="btn btn-success pull-right" style="margin-left: 5px;">Registrar Pedido</button>
<button type="button"
 id="conpedido" class="btn btn-default pull-right">Conv Cotiza</button>
</div>
              </div>
            </div>
          </div>


		  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading header">Comentarios <span class="fa fa-commenting"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                        <div class="form-group ">
                          <textarea class="form-control col-sm-12" style="max-width: 100%; " rows="2" id="comment"></textarea>
                        </div>
                </div>
              </div>
            </div>
           </div>


		  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading header">Instrucciones Internas <span class="fa fa-commenting"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                        <div class="form-group ">
                          <textarea class="form-control col-sm-12" style="max-width: 100%; " rows="2" id="commentInt"></textarea>
                        </div>
                </div>
              </div>
            </div>
           </div>


		  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading header">Dirección <span class="fa fa-file-text"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                  <div class="form-group col-sm-8 ">
                        <label class="control-label">Dirección Factura</label>
                      
                          <select class="form-control" id="pkDireccion">
                                      @foreach($direccion as $dic)
                                    <option value="{{ $dic->IdDireccion }}"> 
                                    {{ $dic->IdDireccion }} - {{ $dic->Calle }} {{ $dic->NumeroExterior }}
                                    Colonia {{ $dic->Colonia }} C.P. {{ $dic->CP }}

                                    </option>
                                    @endforeach
                          </select>

                        </div>
                </div>
              </div>
            </div>
  
        </div>
  
    
	</div>
  </div>
<script type="text/javascript">

$('#pro').on('shown.bs.modal', function () {
    $('#product').focus();
})

$('#conpedido').on('click', function() {

  var id = $('#coti').val();
    
   $.ajax({
            url: "/convertirPedido/"+id ,
            type: "get",
            cache: false,
            contentType: false,
            processData: false
        })
           .done(function (data, textStatus, jqXHR) {
              window.location.href = '/ordersWeb';
            })
            .fail(function (data, textStatus, jqXHR) {
               console.log(jqXHR);                        
            });
 });

$('#registrar').on('click', function() {

  var id = $('#coti').val();
  var coment = $('#comment').val();

  if($('#commentInt').val() != '')
  var comentInt = $('#commentInt').val();
  else
  var comentInt = 'null';

  var direc = $('#pkDireccion').val();
  
  console.log(id);
  console.log(coment);
  console.log(comentInt);
  console.log(direc);
    
   $.ajax({
            url: "/addPedido/"+id+"/"+coment+"/"+comentInt+"/"+direc,
            type: "get",
            cache: false,
            contentType: false,
            processData: false
        })
           .done(function (data, textStatus, jqXHR) {
              window.location.href = '/ordersWeb';
            })
            .fail(function (data, textStatus, jqXHR) {
               console.log(jqXHR);                        
            });
 });


$('#insertD').on('click', function() {
  var socio = $('#socio').val();
  var prod = $('#code').text();
  var cant = $('#cant').val();
  var id = $('#coti').val();

   $.ajax({
            url: "/agregarDetalleP/"+ socio +"/"+prod+"/"+cant+"/"+id ,
            type: "get",
            cache: false,
            contentType: false,
            processData: false
        })
           .done(function (data, textStatus, jqXHR) {
              window.location.href = '/pedidop/'+id;
            })
            .fail(function (data, textStatus, jqXHR) {
               console.log(jqXHR);                        
            });
 });

$('#quit').on('click', function() {
$('#footer').hide();
$('#searchPro').show();
$('#ProductA').hide();
 });

$('#refreshC').on('click', function() {
var text = $('#txtPrecio').text();
var price = text.split(" ");
var cant = $('#cant').val();
var subtotal = (cant * price[0])+" "+price[1];
$('#txtSubtotal').text(subtotal);
$('#txtTotal').text(subtotal);

console.log(cant * price[0]);

 });

$('#getproduct').on('click', function() {
      var formData = new FormData(document.getElementById("frmProduct"));
         $.ajax({
             type: 'POST',
             url: "/cotizacionDetail",
             dataType: "html",
             data: formData,
             cache: false,
             contentType: false,
             processData: false

         })
             .done(function (data, textStatus, jqXHR) {
                  $('#footer').show();
                  $('#searchPro').hide();
                  $('#ProductA').show();
                  $('#cant').val(1);

                data = JSON.parse(data);

                $.each(data, function(i, item){
                  switch(i) {
                       case 'CodigoArticulo':
                          $('#code').text(item);
                           break;
                       case 'NombreArticulo':
                          $('#nameA').text(item);
                           break;
                       case 'NombreAlmacen':
                          $('#txtAlmacen').text(item);
                           break;
                       case 'Stock':
                         $('#txtExistencia').text(item);
                           break;
                        case 'Precio':
                         $('#txtPrecio').text(item);
                         $('#txtSubtotal').text(item);
                         $('#txtIva').text('0.00');
                         $('#txtTotal').text(item);
                           break;
                   
                   }
                    $('#cant').val(1);

                  });                                                     
             })
            .fail(function (data, textStatus, jqXHR) {
                   console.log(jqXHR); 
             });
    });

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

    $(document).keypress(function(e) {
 console.log($('#product').val() + e.key); 
         $.ajax({
            url: "/producto/"  + $('#product').val() + e.key,
            type: "get",
            cache: false,
            contentType: false,
            processData: false
        })
           .done(function (data, textStatus, jqXHR) {
             $('#product').autocomplete({
                source: data,
                appendTo: "#pro" 
               });
            })
            .fail(function (data, textStatus, jqXHR) {
               console.log(jqXHR);                        
            });
});


$("#cancel").click(function () {
var cot = $('#coti').val();
              $.alert({
                    icon: 'glyphicon glyphicon-question-sign',
                      title: 'Mensaje de Pulido PT',
                    content: '¿Esta seguro de Eliminar este documento?',
                     buttons: {
                       Si: function () {
               $.ajax({
                url: "/eliminarPedido/"+cot,
                type: "get",
                cache: false,
                contentType: false,
                processData: false
               })
            .done(function (data, textStatus, jqXHR) {
                    location.href="/ordersWeb";    
                                         })
            .fail(function (data, textStatus, jqXHR) {
                                                    // alert(jqXHR);
                                                });    
                                         
                                    },
                                    somethingElse: {
                                        text: 'No', // Some Non-Alphanumeric characters
                                        action: function () {

                                          }
                                       }
                                     }
                                 });
                            });


</script>

@endsection