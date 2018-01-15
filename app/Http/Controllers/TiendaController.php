<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class TiendaController extends Controller
{


  public function __construct()
  {

  }
  public function index(request $request){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
    return view('Tienda/Principal/index')->with('carritos',$carritos);
  }
}
