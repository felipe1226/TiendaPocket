<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Http\Requests;
use PocketByR\Comentarios;
use PocketByR\Detalles;
use PocketByR\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Auth;

class DetallesController extends Controller
{
  public function store(Request $request){
    $comentarios = new comentarios;
    $comenrarios->id = Auth::user()->id;
    $comenrarios->id_empresa = $request->id_empresa;
    $comenrarios->id_articulo = $request->id_articulo;
    $comenrarios->calificacion = $request->calificacion;
    $comenrarios->titulo_comentario = $request->titulo_comentario;
    $comenrarios->comentario = $request->comentario;

    $comenrarios->save();
    Flash::success("El Comentario se ha registrado satisfactoriamente!")->important();
    return redirect('detalles/');
  }
  public function show(){

  }
  public function Comentario(){
    return view('Tienda/Articulo/Comentarios');
}
