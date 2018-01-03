<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCotizacion extends Model
{
	
    protected $table = 'dbo.DetalleCotizaciones';

    protected $fillable = 
    ['PKDetalleCotizacion'
      ,'FKCotizacion'
      ,'Cantidad'
      ,'Almacen'
      ,'Precio'
      ,'created_at'
      ,'updated_at'];

}