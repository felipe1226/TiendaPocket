<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{

    protected $table = 'departamento';

    protected $fillable = ['id', 'nombre'];


    public function posee(){
        return $this->hasMany('PocketByR\Ciudad','idDepartamento','id');
    }
}
