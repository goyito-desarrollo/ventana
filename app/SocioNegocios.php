<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class SocioNegocios extends Model
{
    protected $connection = 'web';
    protected $table = 'IV_VV_SociosNegocios';

    protected $fillable = 
    ['CodigoSN'
      ,'Tipo'
      ,'Nombre'
      ,'NombreExtranjero'
      ,'GrupoSN'
      ,'RFC'
      ,'Moneda'
      ,'Tel1'
      ,'Tel2'
      ,'Celular'
      ,'Fax'
      ,'Email'
      ,'SitioWeb'
      ,'CondicionesPago'
      ,'Vendedor'
      ,'LineaCredito'
      ,'Saldo'
      ,'DocumentosAbiertos'
      ,'SaldoVencido'];

}