<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';

    protected $fillable = ['id', 'id_proveedor', 'nombre', 'categoria', 'marca', 'color', 'precio', 'cantidad', 'imagen1', 'imagen2', 'imagen3', 'descripcion', 'descuento', 'calificacion'];


    public function scopeBuscarxCategoria($query, $categoria){
      $resultado = $query->where('categoria','=',$categoria);
      return $resultado;
    }

    public function scopeBusquedaArticulo($query, $categoria, $articulo){
      $resultado;
      if($categoria == "Categorias"){
        $resultado = $query->where('nombre','like','%'.$articulo.'%');
      }
      else{
        if($articulo == ""){
          $resultado = $query->where('categoria','=',$categoria);
        }
        else{
          $resultado = $query->where('categoria','=',$categoria)->where('nombre','like','%'.$articulo.'%');
        }
      }
      return $resultado;
    }


    public function scopeBuscarNuevos($query){
      $fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );
      $resultado = $query->where('created_at','=',$proveedor)->orderBy('nombre', 'asc');
      return $resultado;
    }

    public function scopeBuscarxProveedor($query, $proveedor){

      $resultado = $query->where('id_proveedor','=',$proveedor)->orderBy('nombre', 'asc');

      return $resultado;
    }
}
