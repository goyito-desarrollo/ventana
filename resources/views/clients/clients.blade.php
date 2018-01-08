@extends('layouts.menu')

@section('content')

<div class="container-fluid" >
	   <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Catálogo Socios de Negocios</div>
        </div>
	 <div class="col-xs-12 col-sm-12 col-md-12">
               <form id="frmsearch" action="/clientes" method="POST">
            <div class="panel panel-primary">

              <div class="panel-heading">Filtro 
              <span class="pull-right fa fa-search" id="search"></span></div>
              <div class="panel-body">
                <div class="form-vertical">
               
                <input type="hidden"  name="_token" value="{{ csrf_token() }}">
                       <div class="row">
                          
                            <strong class="col-sm-6 col-md-4 control-label">Empresa</strong>
                            <p class="col-sm-6 col-md-8 control-label">Pulido MÉXICO</p>
                          
                        </div>
                      
                        <div class="form-group ">
                         <label class="col-sm-4 control-label">Código SN</label>
                         <div class="col-sm-8">
                            <input class="form-control margin-bottom" type="text" id="codigosn" name="codigosn">
                         </div>
                      </div>
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Nombre S.N</label>
                         <div class="col-sm-8">
                            <input class="form-control margin-bottom" type="text" id="name" name="name">
                         </div>
                      </div>
                    
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Grupo SN</label>
                         <div class="col-sm-8">
                            <input class="form-control margin-bottom" type="text" id="groupsn" name="groupsn">
                         </div>
                      </div>
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">Condición de Pago</label>
                         <div class="col-sm-8">
                            <input class="form-control margin-bottom" type="text" id="pay" name="pay">
                         </div>
                      </div>
                      <div class="form-group ">
                         <label class="col-sm-4 control-label">RFC</label>
                         <div class="col-sm-8">
                            <input class="form-control" type="text" id="rfc" name="rfc">
                         </div>
                      </div>
                
                </div>
                    
              </div>
            </div>
              </form>
          </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
             <table class="table">
                <thead>
                  <tr class="bg-primary">
                    <th></th>
                    <th>Código SN</th>
                    <th>Nombre</th>
                    <th>Grupo Sn</th>
                    <th>RFC</th>
                    <th>Condición de Pago</th>
                  </tr>
                </thead>
                <tbody>
               @foreach($Socios as $socio)
                  <tr class="info">
                    <td>
                        <a href="/clientes/{{ $socio->CodigoSN }}/"><span class="fa fa-arrow-right" style="color:blue">&nbsp</span></a>
                        <a href=""><span class="fa fa-check-circle" style="color:#f0ad4e"></span></a> 
                    </td>
                    <td>{{ $socio->CodigoSN }}</td>
                    <td>{{ $socio->Nombre }}</td>
                    <td>{{ $socio->GrupoSN }}</td>
                    <td>{{ $socio->RFC }}</td>
                    <td>{{ $socio->CondicionesPago }}</td>
                  </tr>
                @endforeach
                </tbody>
             </table>
            </div>
           <?php echo $Socios->render(); ?>
        </div>
      </div>
	</div>
<script type="text/javascript">
   var spanSubmit = $('#search');

    spanSubmit.on('click', function() {
        $(this).closest('form').submit();
        // Will also work, but might fail if nesting is changed:
        // $(this).parent().submit();
    });

    $(document).keypress(function(e) {
    if(e.which == 13) {
         $('#frmsearch').submit();
    }
});

/*$(document).keypress(function(e) {
    if(e.which != 13) {
 console.log($(this).val());
}
});*/

</script>

@endsection