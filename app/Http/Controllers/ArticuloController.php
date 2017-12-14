<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;
use PocketByR\Articulo;
use Laracasts\Flash\Flash;
use Auth;

class ArticuloController extends Controller
{
  public function __construct()
  {

  }

  public function store(Request $request){
    $articulo = new Articulo;
    $articulo->id_proveedor = Auth::user()->id;
    $articulo->nombre = $request->nombre;
    $articulo->categoria = $request->categoria;
    $articulo->marca = $request->marca;
    $articulo->descripcion = $request->descripcion;
    $file = $request->file('imagenArticulo');
    $nombre = $file->getClientOriginalName();
    //indicamos que queremos guardar un nuevo archivo en el disco local
    \Storage::disk('local')->put($nombre,  \File::get($file));
    $articulo->imagen = $nombre;

    $articulo->save();

    return redirect()->route('Articulo.registrarArticulo');
  }
}
