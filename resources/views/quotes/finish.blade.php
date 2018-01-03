@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Nueva Cotización</div>
            <div class="panel-body">
             <!--icono regresar-->
                  <a href="http://localhost/ventanaWeb/public/cotizaciones">
                         <i data-toggle="tooltip" data-placement="left" title="Regresar" class="fa fa-reply fa-2x" style="color:black;"></i>
                  </a>&nbsp &nbsp
               <!--icono buscar por codigo-->
                   <a href="#">
                <i data-toggle="tooltip" data-placement="left" title="Documento" class="fa fa-file-text fa-2x" style="color:black;"aria-hidden="true"></i>
                  </a>&nbsp &nbsp
                    <!--icono buscar por multiplespalabras-->
                   <a href="#">
                <i data-toggle="tooltip" data-placement="left" title="Ver PDF" class="fa fa-file-pdf-o fa-2x" style="color:black;"aria-hidden="true"></i>
                  </a>&nbsp &nbsp
                    <!--icono cambiar usuario-->
                   <a href="#">
                <i data-toggle="tooltip" data-placement="left" title="Correo" class="fa fa-envelope-o fa-2x" style="color:black;"aria-hidden="true"></i>
                  </a>&nbsp &nbsp    
                   <!--icono cancelar-->
                  <a href="#" >
                         <i data-toggle="tooltip" data-placement="left" title="Duplicar" class="fa fa-files-o fa-2x"  style="color:black;"></i>
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
                                    <option value="form2">Pulido2</option>
                                </select>
                            </div>
                      </div>
                      <!--Primer formulario-->
                      <div id="form1" class="txtForm" > 
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Folio</label>
                             <div class="col-sm-8">
                                 <p>{{$cotizacion->Folio}}</p>
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
                                <p>CBARROSO</p>
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
                                <p class="control-label" id="lblLimitCredit">{{ $client->LineaCredito }}</p>
                             </div>
                          </div>
                          
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Saldo</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblSaldo">{{ $client->Saldo }}</p>
                             </div>
                          </div>
                          
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Saldo Vencido</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblSaldoVencido">{{ $client->SaldoVencido }}</p>
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
        <input type="hidden" name="coti" id="coti" value="{{$cotizacion->PKCotizacion}}">
   <input type="text" id="product" name="product" class="form-control" placeholder="Agregar Productos">
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

            <div style="margin-top:15px;" class="panel panel-primary">
              <div class="panel-heading header">Articulos <span class="fa fa-cog"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                   <table class="table table-striped">
                     <thead> 
                     <tr> 
                     <th>#</th>
                     <th>Articulo</th>
                     <th>Almacen</th> 
                     <th>Cantidad</th> 
                     <th>Precio</th> 
                     </tr> 
                     </thead>
                     <tbody> 
                     @foreach($details as $detail)
                       <tr>
                       <td>
                        {{ $detail->FKArticulo }}
                       </td>
                       <td>
                         {{ $detail->Name }}
                       </td>
                       <td>
                         {{ $detail->Almacen }}
                       </td>
                         <td>
                       {{ $detail->Cantidad }}
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
        <td><strong>Subtotal : </strong>{{$cotizacion->Subtotal}} {{ $client->Moneda}}</td>
        <td id="txtSubtotal"></td> 
       </tr>
        <tr>
        <td><strong>Iva : </strong> {{ $cotizacion->Subtotal * .16 }} {{ $client->Moneda}} </td>
        <td id="txtIva"></td> 
       </tr>
       <tr>
      <td><strong>Total: </strong> {{$cotizacion->Total}} {{ $client->Moneda}}</td>
      <td id="txtTotal"></td> 
       </tr>
      </table>
      </div>
<div class="col-md-12">
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
                          <textarea class="form-control col-sm-12" style="max-width: 100%; " rows="2" id="comment"></textarea>
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
                        <label class="col-sm-4 control-label">Tipo de Comprobante</label>
                        <div class="form-group col-sm-8 ">
                          <select class="form-control" id="">
                                    <option value="form1">Fiscal</option>
                                    <option value="form2">Fiscal2</option>
                          </select>
                        </div>
                </div>
              </div>
            </div>
  
        </div>
  
    
	</div>
  </div>
<script type="text/javascript">

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
    
   $.ajax({
            url: "/addcotizacion/"+id ,
            type: "get",
            cache: false,
            contentType: false,
            processData: false
        })
           .done(function (data, textStatus, jqXHR) {
              window.location.href = '/cotizaciones';
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
            url: "/agregarDetalle/"+ socio +"/"+prod+"/"+cant+"/"+id ,
            type: "get",
            cache: false,
            contentType: false,
            processData: false
        })
           .done(function (data, textStatus, jqXHR) {
              window.location.href = '/cotizacionP/'+id;
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



</script>

@endsection