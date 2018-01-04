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
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Cuenta/index')->with('carritos', $carritos);
  }

  
  public function pedidos(){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    //$pedidos = Pedido::Listar(Auth::user()->idEmpresa)->get();
    return view('Tienda/Pedidos/index')->with('carritos', $carritos);
  }

  public function eliminarDireccion(Request $request){
    $direccion = Direccion::find($request->id);
    $direccion->delete();
  }

}
