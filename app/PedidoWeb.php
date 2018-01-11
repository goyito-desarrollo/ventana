<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoWeb extends Model
{
	
    protected $table = 'dbo.PedidoWeb';

    protected $fillable = 
     ['PKPedido'
      ,'Sucursal'
      ,'FolioWeb'
      ,'FolioSap'
      ,'Fecha'
      ,'FKSocionegocios'
      ,'FKCliente'
      ,'Referencia'
      ,'Paqueteria'
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
      ,'DocEntry'
      ,'FechaProcSAP'];

}