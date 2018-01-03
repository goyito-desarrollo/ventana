<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticulosAlmacen extends Model
{
    protected $connection = 'web';
    protected $table = 'IV_VV_ArticulosxAlmacen';

    protected $fillable = 
    ['CodigoArticulo'
      ,'NombreArticulo'
      ,'CodigoAlmacen'
      ,'NombreAlmacen'
      ,'Stock'
      ,'Comprometido'
      ,'Pedido'
      ,'StockMinimo'
      ,'StockMaximo'];

}