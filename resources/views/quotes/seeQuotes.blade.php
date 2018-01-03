@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">COTIZACIÓN Primario 201709-0000130</div>
            <div class="panel-heading">
                  <a href="newOrders">
                    <span class="fa-stack fa-lg" style="color:black;">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-list fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                
                  <a href="newOrders">
                    <span class="fa-stack fa-lg" style="color:black;">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-file-o fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                
                  <a href="newOrders">
                    <span class="fa-stack fa-lg" style="color:black;">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-floppy-o fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                
                  <a href="newOrders">
                    <span class="fa-stack fa-lg" style="color:black;">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                
                  <a href="" data-toggle="modal" data-target="#myModal">
                    <span class="fa-stack fa-lg" style="color:black;" >
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-files-o fa-stack-1x fa-inverse  fa-flip-horizontal"></i>
                    </span>
                  </a>
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body">
                          <label class="text-justify">
                              ¿Desea Duplicar el documento de COTIZACIÓN PRIMARIO 201709-000130?<br>
                              El Documento se va a generar como borrador. Si existen diferencia de Precios,
                              los orecuis se van a ajustar al valor actual.
                          </label>
                        </div>
                        <div class="modal-footer">
                          <label>¿Desea continuar?</label>&nbsp &nbsp
                            <br class="visible-xs"><br class="visible-xs">
                          <button type="button" class="btn btn-primary " data-dismiss="modal"onclick="window.location='quotes';">Aceptar</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>

                    </div>
                  </div>
                <br class="visible-xs"><br class="visible-xs">
              </div>
        </div>
        
		<div class="col-xs-12 col-sm-12 col-md-7">
            <div class="panel panel-primary">
              <div class="panel-heading">
                  <span class="fa fa fa-database fa-2x" ></span>&nbsp Datos Generales 
              </div>
                
              <div class="panel-body">
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Folio SAP</strong>
                            <p class="col-sm-6 col-md-8 control-label">0</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Fecha</strong>
                            <p class="col-sm-6 col-md-8 control-label">21/09/17 09:56</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Empresa</strong>
                            <p class="col-sm-6 col-md-8 control-label">Pulido MÉXICO</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Representante</strong>
                            <p class="col-sm-6 col-md-8 control-label">Zap4</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">
                                Código SN
                                <span class="fa fa-arrow-right" style="color:#f0ad4e">&nbsp</span>
                            </strong>
                            <p class="col-sm-6 col-md-8 control-label">CXAXX010101007</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Nombre</strong>
                            <p class="col-sm-6 col-md-8 control-label">WTP & CHROME INC.</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">RFC</strong>
                            <p class="col-sm-6 col-md-8 control-label">IASH620625G55</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Condición de Pago</strong>
                            <p class="col-sm-6 col-md-8 control-label">30 dias</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Referencia</strong>
                            <p class="col-sm-6 col-md-8 control-label">&nbsp</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Tipo de comprobante</strong>
                            <p class="col-sm-6 col-md-8 control-label">01.-Primario</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
       <div class="panel panel-primary">
           <div class="panel-heading">
               <span class="fa fa-cube fa-2x" ></span>&nbsp Articulos
           </div>
           <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  <tr class="">
                    <th>Artículo</th>
                    <th>&nbsp</th>
                    <th style="text-align:center;">Cantidad</th>
                    <th style="text-align:center;">Almacén</th>
                    <th style="text-align:right;">Precio</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="info">
                    <td>
                        <strong class="">1</strong> 
                                        
                    </td>
                    <td >2401 <br>K-MALLA P/ASILENCIADOR AERO 10(IN) INBOX</td>
                    <td style="text-align:center;">7.00</td>
                    <td style="text-align:center;">111</td>
                    <td style="text-align:right;">&nbsp &nbsp &nbsp &nbsp 48.63 USD<br>
                        Sub: 340.41 USD
                        
                    </td>
                  </tr>
                
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total de Lineas &nbsp 3 </th>
                        <th> &nbsp  </th>
                        <th >Cantidad Total &nbsp 6.00</th>
                        <th>&nbsp</th>
                        <th style="text-align:right;">Sub Total &nbsp&nbsp$2,021.17 USD<br>
                                                        IVA   &nbsp&nbsp&nbsp &nbsp$0.0 USD<br>
                                                      Total    &nbsp  $2,021.17 MXP
                        </th>
                    </tr>
                </tfoot>
             </table>   
           </div>
       </div>  
        
       <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="panel panel-primary">
                  <div class="panel-heading">Comentario <span class="fa fa-commenting"></span></div>
                  <div class="panel-body">
                    <div class="form-vertical">
                            <div class="form-group ">
                              <label class="control-label">&nbsp </label>
                            </div>
                    </div>
                  </div>
                </div>
           </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">Comentario Interno <span class="fa fa-commenting"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                        <div class="form-group ">
                          <label class="control-label">&nbsp </label>
                        </div>
                </div>
              </div>
            </div>
           </div>
       </div>
    
       <!--div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="panel panel-primary">
              <div class="panel-heading">Comentario Interno <span class="fa fa-commenting"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                        <div class="form-group ">
                          <textarea class="form-control col-sm-12" style="max-width: 100%; " rows="2" id="comment"></textarea>
                        </div>
                </div>
              </div>
            </div>
           </div>
        </div-->
    
        <div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">Dirección <span class="fa fa-address-book"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                        
                          <label class="control-label">Dirección Factura </label>
                          <p class="col-xs-12  ">4826 KENDRA FOREST TRL. Colonia C.P. 77</p>
                        
                </div>
                  
                <div class="form-vertical">
                        
                          <label class="control-label">Dirección Entrega</label>
                          <p class="col-xs-12  ">4826 KENDRA FOREST TRL. Colonia C.P. 77</p>
                        
                </div>
              </div>
            </div>
           </div>
            
		  <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">Documentos Relacionados <span class="fa fa-book"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: gray; color:white;">Documentos Anteriores</div>
                        <div class="panel-body">
                              <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead style="background-color: black; color:white;">
                                      <tr>
                                        <th>&nbsp</th>
                                        <th>Documento</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr class="info">
                                        <td>
                                            <a href="seeOrders"><span class="fa fa-file" style="color:white">&nbsp</span></a> 

                                        </td>
                                        <td >Factura #100012249</td>
                                        
                                      </tr>

                                    </tbody>
                                    
                                 </table>   
                               </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
           </div>
        </div>
        <!--div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="panel panel-primary">
              <div class="panel-heading">Documentos Relacionados <span class="fa fa-book"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                        <div class="form-group ">
                          <textarea class="form-control col-sm-12" style="max-width: 100%; " rows="2" id="comment"></textarea>
                        </div>
                </div>
              </div>
            </div>
           </div>
        </div-->
    </div>


@endsection