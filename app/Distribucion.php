<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Distribucion extends Model
{

  protected $table = 'distribucion';

  protected $fillable = ['id', 'proveedor', 'departamento', 'costo'];

  public function proveedor(){
    return $this->belongsTo('PocketByR\Empresa', 'id', 'proveedor');
  }


  public function scopeListar($query, $proveedor){
    $resultado = $query->where('proveedor','=',$proveedor);
    return $resultado;
  }

}
