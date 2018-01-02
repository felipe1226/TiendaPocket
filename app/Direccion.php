<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
  protected $table = 'direccion';

  protected $fillable = ['id', 'id_empresa', 'referencia', 'nombres', 'apellidos', 'departamento', 'ciudad', 'direccion', 'movil',  'telefono', 'informacion'];

  public function pertenece(){
    return $this->belongsTo('PocketByR\Empresa', 'id', 'id_empresa');
  }


  public function scopeListar($query, $idEmpresa){
    $resultado = $query->where('id_empresa','=',$idEmpresa);
    return $resultado;
  }
}
