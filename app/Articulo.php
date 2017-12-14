<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';

    protected $fillable = ['id', 'id_proveedor', 'nombre', 'categoria', 'marca', 'imagen',  'descripcion'];
}
