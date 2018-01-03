<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizaciones extends Model
{
	
    protected $table = 'dbo.Cotizaciones';

    protected $fillable = 
     ['PKCotizacion'
      ,'Sucursal'
      ,'Folio'
      ,'Fecha'
      ,'FKSocionegocios'
      ,'FKCliente'
      ,'Referencia'
      ,'Total'
      ,'created_at'
      ,'updated_at'
      ,'Subtotal'
      ,'Vendedor'
      ,'Comentario'
      ,'ComentarioInterno'
      ,'FKDireccion'
      ,'Estatus'
      ,'EstatusSAP'
      ,'ErrorSAP'
      ,'VecesEjec'
      ,'FechaProcSAP'];

}