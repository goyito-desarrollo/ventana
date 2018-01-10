<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVentana extends Model
{
    protected $connection = 'web';
    protected $table = 'IV_VV_U_Usuarios';

    protected $fillable = 
    ['TipoUsuario'
      ,'User'
      ,'Pass'
      ,'Posicion'
      ,'Nombre'
      ,'SegundoNombre'
      ,'Apellido'
      ,'Email'];

}