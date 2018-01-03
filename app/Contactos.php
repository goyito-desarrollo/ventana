<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{

    protected $connection = 'web';
    protected $table = 'IV_VV_SN_Contactos';

    protected $fillable = 
    ['CodigoSN'
      ,'IdContacto'
      ,'Nombre'
      ,'SegundoNombre'
      ,'Apellido'
      ,'Tel1'
      ,'Tel2'
      ,'Celular'
      ,'Email'
      ,'Comentarios1'
      ,'Comentarios2'];

}