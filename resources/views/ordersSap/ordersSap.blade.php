@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Catálogo Pedido de Ventas</div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-5">
            <div class="panel panel-primary">
              <div class="panel-heading">Filtro <span class="fa fa-search"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
                       <div class="row">
                          
                            <strong class="col-sm-6 col-md-4 control-label">Empresa</strong>
                            <p class="col-sm-6 col-md-8 control-label">Pulido MÉXICO</p>
                          
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
                         <label class="col-sm-4 control-label">Fecha</label>
                         <div class="col-sm-8">
                            <input class="form-control margin-bottom" type="date">
                         </div>
                      </div>
                    
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Referencia</label>
                         <div class="col-sm-8">
                            <input class="form-control margin-bottom" type="text">
                         </div>
                      </div>
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Código Cliente</label>
                         <div class="col-sm-8">
                            <input class="form-control" type="text">
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
                    <th></th>
                    <th>Fecha</th>
                    <th>Folio Int</th>
                    <th>Cliente</th>
                    <th>Fol Portal</th>
                    <th>Status Inv</th>
                    <th>Total</th>
                    <th>Pagado</th>
                    <th>Referencia</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="info">
                    <td>&nbsp &nbsp</td>
                    <td>18/10/17</td>
                    <td>VVVrr456</td>
                    <td>Javier</td>
                    <td>sss45676</td>
                    <td>Activo</td>
                    <td>$5678</td>
                    <td>Si</td>
                    <td>Ninguna</td>
                  </tr>
                
                </tbody>
             </table>
            </div>
           
        
    
	</div>


@endsection