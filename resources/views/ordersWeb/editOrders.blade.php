@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Nuevo Pedido</div>
            <div class="panel-body">
             <!--icono regresar-->
                  <a href="http://localhost/ventanaWeb/public/ordersWeb">
                         <i data-toggle="tooltip" data-placement="left" title="Regresar" class="fa fa-reply fa-2x" style="color:black;"></i>
                  </a>&nbsp &nbsp
                <!--  icono continuar -->
                  <a href="http://localhost/ventanaWeb/public/pedidop/{{$cotizacion->PKPedido}}">
                <i data-toggle="tooltip" data-placement="left" title="Continuar" class="fa fa-check-circle-o fa-2x" style="color:#2ECC71;"aria-hidden="true"></i>
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
                   <a href="#" id="cambiar">
                <i data-toggle="tooltip" data-placement="left" title="Cambio de Cliente" class="fa fa-user fa-2x" style="color:black;"aria-hidden="true"></i>
                  </a>&nbsp &nbsp    
                   <!--icono cancelar-->
                  <a href="#" id="cancel">
                         <i data-toggle="tooltip" data-placement="left" title="Eliminar Pedido" class="fa fa-ban fa-2x"  style="color:red;"></i>
                 </a><br class="visible-xs"><br class="visible-xs">
        </div>
        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading header">
                  <span class="fa fa-user-circle-o fa-2x" ></span>&nbsp Datos del Cliente
                 <input type="hidden" name="cot" id="cot" 
                 value="{{$cotizacion->PKPedido}}">
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
                                <p>CBARROSO</p>
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Codigo SN</label>
                             <div class="col-sm-8 ">                            
                                 <div class="input-group" >
                                      <p id="lblCodigo" style="color:blue">{{$client->CodigoSN}}</p>
                    <input type="hidden" name="soc" id="soc" 
                 value="{{$client->CodigoSN}}">
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
            <div class="panel panel-primary">
              <div class="panel-heading header">Datos del Documento <span class="fa fa-search"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                       <div class="row">
                          
                            <strong class="col-sm-6 col-md-4 control-label">Empresa</strong>
                            <p class="col-sm-6 col-md-8 control-label">Pulido MÉXICO</p>
                          
                        </div>
                      
                        <div class="form-group ">
                         <label class="col-sm-4 control-label">Condición de Pago</label>
                         <div class="col-sm-8">
                            <p class="control-label" id="lblCondiciones">{{ $client->CondicionesPago }}</p>
                          <!--   <select class="form-control" id="">
                                    <option value="form1">30 dias</option>
                                    <option value="form2">45 dias</option>
                                    <option value="form3">60 dias</option>
                            </select> -->
                         </div>
                      </div>
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Moneda</label>
                         <div class="col-sm-8">
                          <p class="control-label" id="lblMoneda">{{ $client->Moneda }}</p>
                           <!--  <select class="form-control" id="">
                                    <option value="form1">MXP</option>
                                    <option value="form2">USD</option>
                                    <option value="form3">EUR</option>
                            </select> -->
                         </div>
                      </div>
                    
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Contacto</label>
                         <div class="col-sm-8">
                            <select class="form-control" id="">
                                    <option value="form1"></option>
                                    <option value="form2"></option>
                          </select>
                         </div>
                      </div>
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Referencia</label>
                         <div class="col-sm-8">
                            <input class="form-control" type="text">
                         </div>
                      </div>
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Tipo de Comprobante</label>
                         <div class="col-sm-8">
                            <select class="form-control" id="">
                                    <option value="form1">01.-Primario</option>
                                    <option value="form2">02.-secundario</option>
                            </select>
                         </div>
                      </div>
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

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

    $(document).keypress(function(e) {

         $.ajax({
            url: "/search/"  + $('#query').val() + e.key,
            type: "get",
            cache: false,
            contentType: false,
            processData: false
        })
           .done(function (data, textStatus, jqXHR) {

             $('#query').autocomplete({
                source: data
               });

           console.log(data); 
            })
            .fail(function (data, textStatus, jqXHR) {
               console.log(jqXHR);                        
            });
});

      /*$('#button').on('click', function() {
           var formData = new FormData(document.getElementById("frmClient"));
         $.ajax({
             type: 'POST',
             url: "1",
             dataType: "html",
             data: formData,
             cache: false,
             contentType: false,
             processData: false

         })
             .done(function (data, textStatus, jqXHR) {
                   
                        data = data.replace('[',' ');
                        data = data.replace(']',' ');
                        data = data.replace(/"/g,' ');
                        data = data.split(',');

                       $('#query').hide();
                       $('#button').hide();
                       $('#lblCodigo').show();

                       $('#lblCodigo').text(data[0]);
                       $('#lblNameU').text(data[1]);
                       $('#lblLimitCredit').text(data[2]);
                       $('#lblSaldo').text(data[3]);
                       $('#lblSaldoVencido').text(data[4]);
                       $('#lblVendedor').text(data[5]);
                       $('#lblCondiciones').text(data[6]);
                       $('#lblMoneda').text(data[7]);


                     console.log(data);                                                      
             })
            .fail(function (data, textStatus, jqXHR) {
                   console.log(jqXHR); 
             });
    });*/

 $("#cancel").click(function () {
var cot = $('#cot').val();
              $.alert({
                    icon: 'glyphicon glyphicon-question-sign',
                      title: 'Mensaje de Pulido PT',
                    content: '¿Esta seguro de Eliminar este documento?',
                     buttons: {
                       Si: function () {
               $.ajax({
                url: "http://localhost/ventanaWeb/public/eliminarPedido/"+cot,
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


 $("#cambiar").click(function () {
                            $.confirm({
                                icon: 'glyphicon glyphicon-pencil',
                                title: 'Cambio de Socio',
                                content: '' +
                                '<form class="formName" id="frmComent">' +
                                '<div class="form-group">' +
                                '<input type="hidden"  name="socn" id="socn" value="' + $('#cot').val() + '" >' +
                                ' <input type="hidden"  name="_token" value="{{ csrf_token() }}"> ' +
                                '<input type="text" class="name form-control" id="soc" name="soc" required/>' +
                                '</div>' +
                                '</form>',
                                buttons: {
                                    formSubmit: {
                                        text: 'Enviar',
                                        btnClass: 'btn-blue',
                                        action: function () {

                                            var formData = new FormData(document.getElementById("frmComent"));

                                            $.ajax({
                                                type: 'POST',
                                                url: "http://localhost/ventanaWeb/public/cambiarUsuarioP",
                                                dataType: "html",
                                                data: formData,
                                                cache: false,
                                                contentType: false,
                                                processData: false

                                            })
                                                .done(function (data, textStatus, jqXHR) {
                                                    $.dialog({
                                                        icon: 'glyphicon glyphicon-ok-sign',
                                                        title: 'Mensaje de Pulido PT',
                                                        content: 'Cambio de cliente Realizado',

                                                    });
                                                    setTimeout(function () {
                                                        window.location.reload(1);
                                                    }, 1000);
                                                })
                                                .fail(function (data, textStatus, jqXHR) {
                                                    $.alert({
                                                        icon: 'glyphicon glyphicon-remove-sign',
                                                        title: 'Mensaje de Pulido PT',
                                                        content: 'Upps algo salio mal' + jqXHR,
                                                    });
                                                });
                                        }
                                    },
                                    cancel: function () {
                                        //close
                                       
                                    },
                                },

                            });
                        });


 
</script>

@endsection