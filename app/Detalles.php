<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
  protected $table = 'comentarios';

  protected $fillable = ['id', 'id_empresa', 'id_articulo', 'calificacion', 'titulo_comentario', 'comentario'];


}
