<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedor';

    public function surte(){
      return $this->hasmany('PocketByR\Articulo', 'id_proveedor', 'id_Empresa');
    }

    public function scopeSearch($query, $arreglo){
        $nombre = $arreglo[0];
        $idEmpresa = $arreglo[1];
    	return $query->where('nombre','LIKE',"%$nombre%")->
    	               where('idEmpresa','LIKE',"%$idEmpresa%")->
    	               orderBy('nombre','ASC');
    }


}
