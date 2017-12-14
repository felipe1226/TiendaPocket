<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\User;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class TiendaController extends Controller
{

  public function index(request $request){
    return view('Tienda/inicio');
  }

  public function contacto(request $request){
    return view('Tienda/contactenos');
  }

  public function registrarArticulo(request $request){
    return view('Tienda/Articulo/RegistrarArticulo');
  }

}
