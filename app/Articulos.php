<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $connection = 'web';
    protected $table = 'IV_VV_Articulos';

    protected $fillable = 
    ['CodigoArticulo'
      ,'NombreArticulo'
      ,'StockTotal'];

}