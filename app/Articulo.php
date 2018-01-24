<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';

    protected $fillable = ['id', 'id_proveedor', 'nombre', 'categoria', 'marca', 'cantidad', 'precio', 'imagen',  'descripcion'];


    public function scopeBuscarxCategoria($query, $categoria){

      $resultado = $query->where('categoria','=',$categoria);

      return $resultado;
    }

    public function scopeBuscarxProveedor($query, $proveedor){

      $resultado = $query->where('id_proveedor','=',$proveedor)->orderBy('nombre', 'asc');

      return $resultado;
    }
}
