<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    protected $connection = 'web';
    protected $table = 'IV_VV_SN_Direcciones';

    protected $fillable = 
    ['CodigoSN'
      ,'IdDireccion'
      ,'TipoDireccion'
      ,'Calle'
      ,'NumeroExterior'
      ,'Colonia'
      ,'CP'
      ,'Ciudad'
      ,'Pais'
      ,'Estado'
      ,'Impuesto'];

}