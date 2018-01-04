<?php

namespace PocketByR;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
	 protected $table = 'ciudad';

	 protected $fillable = ['id', 'idDepartamento', 'nombre'];


}
