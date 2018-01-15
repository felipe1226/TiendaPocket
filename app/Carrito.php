<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
  protected $table = 'carrito';

  protected $fillable = ['id', 'id_empresa', 'id_articulo', 'cantidad','estado'];

  public function pertenece(){
    return $this->hasOne('PocketByR\Empresa', 'id', 'id_empresa');
  }

  public function almacena(){
    return $this->hasOne('PocketByR\Articulo', 'id', 'id_articulo');
  }


  public function scopeConsultaCarrito($query, $id_empresa){

    $resultado = $query->where('id_empresa','=',$id_empresa);

    return $resultado;
  }

}
