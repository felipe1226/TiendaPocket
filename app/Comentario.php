<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
  protected $table = 'comentarios';

  protected $fillable = ['id', 'id_empresa', 'id_articulo', 'calificacion', 'titulo', 'comentario'];


  public function scopeListarComentarios($query, $id_articulo){
    $resultado = $query->where('id_articulo','=',$id_articulo);
    return $resultado;
  }
  public function califica(){
    return $this->hasOne('PocketByR\Empresa', 'id', 'id_empresa');
  }

}
