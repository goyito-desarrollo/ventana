@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">PEDIDO Primario 201709-0000554</div>
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
                
                  <a href="newOrders">
                    <span class="fa-stack fa-lg" style="color:black;">
                      <i class="fa fa-square fa-stack-2x"></i>
                      <i class="fa fa-files-o fa-stack-1x fa-inverse  fa-flip-horizontal"></i>
                    </span>
                  </a>
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
                            <p class="col-sm-6 col-md-8 control-label">12946</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Fecha</strong>
                            <p class="col-sm-6 col-md-8 control-label">21/09/17 08:22</p>
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
                            <p class="col-sm-6 col-md-8 control-label">CIASH620625G66</p>
                  </div>
                  <div class="row">
                            <strong class="col-sm-6 col-md-4 control-label">Nombre</strong>
                            <p class="col-sm-6 col-md-8 control-label">IBARRA SAINZ HECTOR GUILLERMO</p>
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
                    <td >7800 <br>32375 BISEL P/FARO REDONDEO DE CENTURY R</td>
                    <td style="text-align:center;">2.00</td>
                    <td style="text-align:center;">111</td>
                    <td style="text-align:right;">&nbsp &nbsp &nbsp &nbsp 239.70 *MXP<br>
                        Sub: 479.40 *MXP
                        
                    </td>
                  </tr>
                
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total de Lineas &nbsp 3 </th>
                        <th> &nbsp  </th>
                        <th >Cantidad Total &nbsp 6.00</th>
                        <th>&nbsp</th>
                        <th style="text-align:right;">Sub Total &nbsp&nbsp$4,821.08 MXP<br>
                                                        IVA   &nbsp&nbsp&nbsp &nbsp$771.36 MXP<br>
                                                      Total    &nbsp  $5,592.44 MXP
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
                              <label class="control-label">TYNY PACK *OCURRE* CONVENIO 14802 </label>
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
                          <p class="col-xs-12  ">BLVD. DR JESUS KUMATE RODRIGUEZ KM 1.5 Colonia RINCON DEL VALLE C.P. 80155 CULIACAN, SIN,MX</p>
                        
                </div>
                  
                <div class="form-vertical">
                        
                          <label class="control-label">Dirección Entrega</label>
                          <p class="col-xs-12  ">BLVD. DR JESUS KUMATE RODRIGUEZ KM 1.5 Colonia RINCON DEL VALLE C.P. 80155 CULIACAN, SIN,MX</p>
                        
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