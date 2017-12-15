<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

use PocketByR\Articulo;
use Laracasts\Flash\Flash;
use Auth;
use Storage;

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


    $img = $request->file('imagenArticulo');

    $file_route = time().'_'.$img->getClientOriginalName();
    Storage::disk('imgArticulos')->put($file_route, file_get_contents( $img->getRealPath()));

    $articulo->imagen = $file_route;
    $articulo->save();
    Flash::success("El articulo se ha registrado satisfactoriamente")->important();
    return redirect('RegistrarArticulo/');
  }

  public function ArtsxCategoria($categoria){
    $articulos = Articulo::BuscarxCategoria($categoria)->get();
    
    return view('Tienda/Articulo/index')->with(['articulos' => $articulos]);
  }

}
