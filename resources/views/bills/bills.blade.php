@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Facturas de Clientes</div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Filtro <span class="fa fa-search"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                    <div class="col-md-6">
                           <div class="row">

                                <strong class="col-sm-6 col-md-4 control-label">Empresa</strong>
                                <p class="col-sm-6 col-md-8 control-label">Pulido MÉXICO</p>

                            </div>

                            <div class="row">

                                <strong class="col-sm-6 col-md-4 control-label">Sucursal</strong>
                                <p class="col-sm-6 col-md-8 control-label"> MÉXICO</p>

                            </div>

                            <div class="row">

                                <strong class="col-sm-6 col-md-4 control-label">Fecha Limite</strong>
                                <p class="col-sm-6 col-md-8 control-label">01/09/17</p>

                            </div>

                         <div class="form-group ">
                             <label class="col-sm-4  control-label">Folio Portal</label>
                             <div class="col-sm-8">
                                <input class="form-control margin-bottom" type="text">
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4  control-label">Folio Interno</label>
                             <div class="col-sm-8">
                                <input class="form-control margin-bottom" type="text">
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Entre Fecha</label>
                             <div class="col-sm-8">
                                <input class="form-control margin-bottom" type="date">
                             </div>

                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Y</label>
                             <div class="col-sm-8">
                                <input class="form-control margin-bottom" type="date">
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Código SN</label>
                             <div class="col-sm-8">
                                <input class="form-control margin-bottom" type="text">
                             </div>
                          </div>
                          <div class="form-group ">
                            <div class="radio-inline col-xs-12 col-md-2">
                              <label class="form-check-label ">
                                   &nbsp 
                                  <input type="radio" class="form-check-input"name="optradio">Todas
                              </label>
                            </div>
                            <div class="radio-inline col-xs-12 col-md-2">
                              <label class="form-check-label ">
                                  <input type="radio" class="form-check-input" name="optradio">Facturas
                              </label>
                            </div>
                            <div class="radio-inline col-xs-12 col-md-2">
                              <label class="form-check-label ">
                                  <input type="radio" class="form-check-input" name="optradio">Facturas de Anticipo
                              </label>
                            </div>
                            <div class="radio-inline  col-xs-12 col-md-2">
                              <label class="form-check-label ">
                                  <input type="radio" class="form-check-input" name="optradio">Nota de Crédito
                              </label>
                            </div>
                            
                          </div>
                    </div>
                    
                    <div class="col-md-6">
                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Serie</label>
                             <div class="col-sm-8">
                                <input class="form-control margin-bottom" type="text">
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">DocNum</label>
                             <div class="col-sm-8">
                                <input class="form-control margin-bottom" type="text">
                             </div>
                          </div>

                          <div class="form-group ">
                             <label class="col-sm-4 control-label">Referencia</label>
                             <div class="col-sm-8">
                                <input class="form-control margin-bottom" type="text">
                             </div>
                          </div>
                            
                          <div class="form-check">
                            <label class="form-check-label col-sm-offset-4">
                              <input type="checkbox" class="form-check-input">
                              Solo Abiertas
                            </label>
                          </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    
        
            <div class="table-responsive">
             <table class="table">
                <thead>
                  <tr class="bg-primary">
                    
                    <th>Empresa</th>
                    <th>Tipo</th>
                    <th></th>
                    <th>Serie</th>
                    <th>DocNum</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Vencimiento</th>
                    <th>Referencia</th>
                    <th>Cond Pago</th>
                    <th>Total</th>
                    <th>Pagado</th>
                    <th>Saldo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="info">
                   
                    <td>Pulido</td>
                    <td>Nota Crédito </td>
                    <td>
                        <a href=""><span class="fa fa-arrow-right" style="color:blue">&nbsp</span></a>
                    </td>
                    <td>ND</td>
                    <td>7000000991</td>
                    <td>20/09/2017</td>
                    <td>Seguros Monterrey</td>
                    <td>20/09/2017</td>
                    <td></td>
                    <td>Contado</td>
                    <td>$3000</td>
                    <td>$5678</td>
                    <td>$8678</td>
                  </tr>
                
                </tbody>
             </table>
            </div>
           
        
    
	</div>


@endsection