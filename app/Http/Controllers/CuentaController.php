<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class CuentaController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Cuenta/index')->with('carritos', $carritos);
  }


  public function direcciones(){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Cuenta/direcciones')->with('carritos', $carritos);
  }

  public function agregarDireccion(){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Cuenta/nuevaDireccion')->with('carritos', $carritos);
  }
}
