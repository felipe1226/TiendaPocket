<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use PocketByR\Direccion;
use PocketByR\Departamento;
use PocketByR\Ciudad;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class CuentaController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
    return view('Tienda/Cuenta/index')->with('carritos', $carritos);
  }


  public function pedidos(){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
    return view('Tienda/Pedidos/index')->with('carritos', $carritos);
  }

  public function eliminarDireccion(Request $request){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
    $direccion->delete();
  }

}
