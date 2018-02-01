<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  protected $table = 'pedido';

  protected $fillable = ['factura', 'id_empresa', 'referencia', 'proveedor', 'costoTotal', 'estado', 'fecha_entrega', 'fecha_envio', 'referencia_direccion', 'nombre', 'direccion', 'localidad', 'telefono', 'movil', 'id_articulo', 'nombre_articulo', 'precio_articulo', 'cantidad_articulo', 'pago', 'comentario'];


  public function scopeListar($query, $id_empresa){

      $resultado = $query->where('id_empresa','=',$id_empresa);

      return $resultado;
  }

  public function scopeListarxGroup($query, $id_empresa){

      $resultado = $query->where('id_empresa','=',$id_empresa)->GroupBy('referencia');

      return $resultado;
  }
}
