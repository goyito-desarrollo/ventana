@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Mis Cotizaciones</div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
    
            <div class="panel panel-primary">
              <div class="panel-heading">Filtro <span class="fa fa-search"></span>
                <a href="nueva">
                     <button role="button" type="button" class=" pull-right btn btn-success btn-circle">
                         <i class="fa fa-plus-circle pull-center"></i>
                     </button><br><br>
                 </a>
              </div>
              <div class="panel-body">
                <div class="form-vertical">
                        <div class="form-group ">
                         <label class="col-sm-4 control-label">Folio</label>
                         <div class="col-sm-8">
                            <input class="form-control margin-bottom" type="text">
                         </div>
                      </div>
                    
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Código SN</label>
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
                    
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Nombre S.N.</label>
                         <div class="col-sm-8">
                            <input class="form-control margin-bottom" type="text">
                         </div>
                      </div>
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Fecha</label>
                         <div class="col-sm-8">
                            <input class="form-control" type="date">
                         </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
    
    
    
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
             <table class="table">
                <thead>
                  <tr class="bg-primary">
                    <th></th>
                    <th>Sucursal</th>
                    <th>Folio</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Referencia</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($cotizaciones as $cotizacion)
                  <tr class="info">
                   <td>
                   @if($cotizacion->Estatus == 0)
                        <a href="cotizacion/{{ $cotizacion->PKCotizacion }}"><span class="fa fa-pencil" style="color:#000"></span></a> 
                   @endif
                    @if($cotizacion->Estatus == 1)
                        <a href="cotizacionP/{{ $cotizacion->PKCotizacion }}"><span class="fa fa-pencil" style="color:#000"></span></a> 
                   @endif
                    @if($cotizacion->Estatus == 2)
                        <a href="cotizacionD/{{ $cotizacion->PKCotizacion }}"><span class="fa fa-file-text-o" style="color:#000"></span></a> 
                   @endif

                    </td>
                 <td>{{$cotizacion->Sucursal}}</td>
                    <td>{{$cotizacion->Folio}}</td>
                    <td>{{$cotizacion->Fecha}}</td>
                    <td>{{$cotizacion->FKCliente}}</td>
                    <td>{{$cotizacion->Referencia}}</td>
                    <td>{{$cotizacion->Total}}</td>
                  </tr>
                @endforeach
                </tbody>
             </table>
            </div>
           </div>
        
    
	</div>
</div>

@endsection