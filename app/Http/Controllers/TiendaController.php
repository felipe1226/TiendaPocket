<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class TiendaController extends Controller
{

  public function index(request $request){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Principal/inicio')->with('carritos',$carritos);
  }

  public function contactenos(request $request){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Contactenos/index')->with('carritos', $carritos);
  }

  public function registrarArticulo(request $request){
    return view('Tienda/Articulo/RegistrarArticulo');
  }

}
