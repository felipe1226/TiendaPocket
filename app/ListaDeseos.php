<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class ListaDeseos extends Model
{
  protected $table = 'listadeseos';

  protected $fillable = ['id_listadeseos','nombre', 'cantidad', 'creado'];

  //
}
