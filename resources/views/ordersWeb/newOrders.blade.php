@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
     <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Nuevo Pedido</div>
           <div class="panel-body">
               <a href="/ordersWeb">
                         <i class="fa fa-reply fa-2x " style="color:black;"></i>
                  </a>&nbsp &nbsp
<!--                   <a href="">
                         <i class="fa fa-check-circle-o fa-2x" ></i>
                 </a>&nbsp &nbsp -->
                  <a href="#" id="cancel">
                         <i class="fa fa-ban fa-2x"  style="color:red;"></i>
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
                                 <p>Borrador</p>
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Fecha</label>
                             <div class="col-sm-8">
                                <p>23/09/17</p>
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
                              <form id="frmClient"  class="form-inline" action="/pedidos" method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <div class="input-group" >
                                
                              <input size="100" class="form-control"  name="query" id="query" type="text" placeholder="Codigo SN">
                                      
                                 </div>
                                 <button type="submit" id ="button" class="btn glyphicon glyphicon-search"></button>
                                    </form>
                             </div>
                          </div>
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Nombre</label>
                             <div class="col-sm-8">
                                <p id="lblNameU">N/A</p>
                             </div>
                          </div>
                          
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Límite de Crédito</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblLimitCredit">$ 0.00</p>
                             </div>
                          </div>
                          
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Saldo</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblSaldo">$ 0.00</p>
                             </div>
                          </div>
                          
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Saldo Vencido</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblSaldoVencido">$ 0.00</p>
                             </div>
                          </div>

                           <div class="form-group ">
                             <label class="col-sm-4 control-label">Vendedor Asignado</label>
                             <div class="col-sm-8">
                                <p class="control-label" id="lblVendedor">N/A</p>
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
                            <p class="control-label" id="lblCondiciones">N/A</p>
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
                          <p class="control-label" id="lblMoneda">N/A</p>
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
                  <div class="form-group col-sm-8 ">
                        <label class="control-label">Dirección Factura</label>
                      
                          <select class="form-control" id="pkDireccion">
                                   
                          </select>

                        </div>
                </div>
              </div>
            </div>
  
        </div>
  
    
  </div>
  </div>
<script type="text/javascript">

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

 $("#cancel").click(function () {
                            $.alert({
                                icon: 'glyphicon glyphicon-question-sign',
                                title: 'Mensaje de Pulido PT',
                                content: '¿Esta seguro de Eliminar este documento?',
                                buttons: {
                                    Si: function () {
                                        // here the key 'something' will be used as the text.
                                      location.href="/ordersWeb";    
                                         
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