<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePedidoWeb extends Model
{
	
    protected $table = 'dbo.DetallePedidoWeb';

    protected $fillable = 
    ['PKDetallePedidoWeb'
      ,'FKPedidoWeb'
      ,'Cantidad'
      ,'Almacen'
      ,'Precio'
      ,'created_at'
      ,'updated_at'];

}