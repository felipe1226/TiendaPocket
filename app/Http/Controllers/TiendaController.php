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
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Principal/index')->with('carritos',$carritos);
  }

  public function MiCuenta(request $request){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Cuenta/index')->with('carritos', $carritos);
  }

}
