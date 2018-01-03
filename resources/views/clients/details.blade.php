@extends('layouts.menu')

@section('content')

  <div class="container-fluid">

        <div class="row">
         <div class="panel panel-default">
            <div class="panel-heading" style="background-color: gray; color:white;">Información Socios de Negocio </div>
        </div>
          <div class="col-md-12 col-sm-12 col-xs-12">

<div style="margin-bottom: 30px;">
 <span><p><strong>Código SN:</strong> {{ $Socios->CodigoSN }}</p> </span>
 <span><p><strong>Nombre: </strong>  {{ $Socios->Nombre}} </p> </span>
 <span><p><strong>Activo: </strong></p> </span>
</div>


<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
    <a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="color:#000">Datos Generales</a>
    </li>
    <li role="presentation">
    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="color:#000">Información de Crédito</a>
    </li>
    <li role="presentation">
    <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" style="color:#000">Direcciones</a>
    </li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" style="color:#000">Contactos</a>
    </li>
      <li role="presentation"><a href="#pedidos" aria-controls="settings" role="tab" data-toggle="tab" style="color:#000">Pedidos</a>
    </li>
     <li role="presentation"><a href="#facturas" aria-controls="settings" role="tab" data-toggle="tab" style="color:#000">Facturas</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" style="margin-top: 15px;">

    <div role="tabpanel" class="tab-pane active" id="home" >
       <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="panel panel-default"> 
    	<div class="panel-heading">Datos Generales</div>
    	 <div class="panel-body"> 
          
          <dl class="dl-horizontal">
  <dt>Nombre Alterno:</dt>
  <dd>{{ $Socios->NombreExtranjero }}</dd>

   <dt>Grupo SN:</dt>
  <dd>{{ $Socios->GrupoSN }}</dd>

   <dt>RFC:</dt>
  <dd>{{ $Socios->RFC  }}</dd>

  <dt>Moneda:</dt>
  <dd>{{ $Socios->Moneda }}</dd>

  <dt>Vendedor Asignado:</dt>
  <dd>{{ $Socios->Vendedor }}</dd>
</dl>
    
    	 </div> </div>
       </div>
       </div>

        <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="panel panel-default"> 
    	<div class="panel-heading">Información Contacto</div>
    	 <div class="panel-body"> 
          
          <dl class="dl-horizontal">
  <dt>Tel 1:</dt>
  <dd>{{ $Socios->Tel1 }}</dd>

   <dt>Tel 2:</dt>
  <dd>{{ $Socios->Tel2 }}</dd>

   <dt>Celular:</dt>
  <dd>{{ $Socios->Celular  }}</dd>

  <dt>Fax:</dt>
  <dd>{{ $Socios->Fax }}</dd>

  <dt>Correo Electrónico:</dt>
  <dd>{{ $Socios->Email }}</dd>

   <dt>Sitio Web:</dt>
  <dd>{{ $Socios->SitioWeb }}</dd>
</dl>
    
    	 </div> </div>
       </div>
       </div>

         <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="panel panel-default"> 
    	<div class="panel-heading">Información Adicional</div>
    	 <div class="panel-body"> 
          
          <dl class="dl-horizontal">
 
</dl>
    
    	 </div> </div>
       </div>
       </div>

    </div>

    <div role="tabpanel" class="tab-pane" id="profile">
    	<table class="table table-striped">
    	  <thead>
    	   <tr class="info"> <th>Empresa</th>
    	    <th>Condición de Crédito</th> 
    	    <th>Límite Crédito</th> 
    	    <th>Saldo</th> 
    	    <th>Documentos Abiertos</th>
    	    <th>Saldo Vencido</th>

    	    </tr>
    	     </thead> 
    	       <tbody> 
    	     <tr> </tr> 
    	       </tbody> 
    	      </table>

    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
       <table class="table table-striped">
    	  <thead>
    	   <tr class="info"> <th>Dirección</th>
    	      <th>Tipo</th> 
    	      <th>Calle</th> 
    	      <th>Número</th> 
    	      <th>Colonia</th>
    	      <th>C.P.</th>
              <th>Ciudad</th>
              <th>CPais</th>
              <th>Estado</th>
              <th>Impuesto</th>
    	    </tr>
    	     </thead> 
    	       <tbody> 
          @foreach($direcciones as $direccion)
            <tr>
    	        <td> {{ $direccion->IdDireccion }} </td>
              <td> {{ $direccion->TipoDireccion }} </td> 
              <td> {{ $direccion->Calle }}</td> 
              <td>{{ $direccion->NumeroExterior }} </td> 
              <td> {{ $direccion->Colonia }}</td> 
              <td> {{ $direccion->CP }} </td> 
              <td>{{ $direccion->Ciudad }}  </td> 
              <td>{{ $direccion->Pais }}  </td> 
              <td>{{ $direccion->Estado }}  </td> 
              <td>{{ $direccion->Impuesto }}  </td>
            </tr> 
           @endforeach
    	       </tbody> 
    	      </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
    	 <table class="table table-striped">
    	  <thead>
    	   <tr class="info"> <th>Nombre</th>
    	      <th>Cel</th> 
    	      <th>Email</th> 
    	      <th>Tel1</th> 
    	    </tr>
    	     </thead> 
    	       <tbody> 
    	     @foreach($contactos as $contacto)
            <tr>
              <td> {{ $contacto->Nombre }} </td>
              <td> {{ $contacto->Celular }} </td> 
              <td> {{ $contacto->Email }}</td> 
              <td>{{ $contacto->Tel1 }} </td> 
            </tr> 
           @endforeach
    	       </tbody> 
    	      </table>
    </div>

     <div role="tabpanel" class="tab-pane" id="pedidos">
    	 <table class="table table-striped">
    	  <thead>
    	   <tr class="info"> 
    	   <th>Doc Num</th>
    	      <th>Fecha</th> 
    	      <th>Origen</th> 
    	      <th>Referencias</th> 
    	       <th>Status Inv</th> 
    	        <th>Total</th> 
    	    </tr>
    	     </thead> 
    	       <tbody> 
    	     <tr> </tr> 
    	       </tbody> 
    	      </table>
    </div>

     <div role="tabpanel" class="tab-pane" id="facturas">
    	 <table class="table table-striped">
    	  <thead>
    	   <tr class="info">
    	    <th>Empresa</th>
    	      <th>Tipo</th> 
    	      <th>Serie</th> 
    	      <th>Docnum</th> 
    	       <th>Fecha</th> 
    	        <th>Vencimiento</th> 
    	        <th>Dias Venc</th>
    	        <th>Referencia</th>
    	        <th>Cod Pago</th>   
    	         <th>Total</th> 
    	          <th>Pagado</th> 
    	           <th>Saldo</th> 
    	    </tr>
    	     </thead> 
    	       <tbody> 
    	     <tr> </tr> 
    	       </tbody> 
    	      </table>
    </div>
  </div>
  </div>
</div>
</div>
@endsection