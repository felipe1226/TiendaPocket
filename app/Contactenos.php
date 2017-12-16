<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Contactenos extends Model
{
  protected $table = 'contactenos';

  protected $fillable = ['id','titulo', 'email', 'referencia_pedido', 'mensaje'];
}
