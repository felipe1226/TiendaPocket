<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';

    protected $fillable = ['id', 'id_proveedor', 'nombre', 'categoria', 'marca', 'imagen',  'descripcion'];


    public function Proveedor(){
      return $this->belongsTo('PocketByR\Proveedor', 'idEmpresa', 'id');
    }




    public function scopeBuscarxCategoria($query, $categoria){

      $resultado = $query->where('categoria','=',$categoria);

      return $resultado;
    }
}
