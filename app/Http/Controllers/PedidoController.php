<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use PocketByR\Pedido;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class PedidoController extends Controller
{

  public function __construct()
  {

  }


  public function index(){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();

    $pedidosGroup = Pedido::ListarxGroup(Auth::user()->idEmpresa)->get();
    $pedidos = Pedido::Listar(Auth::user()->idEmpresa)->get();
    return view('Tienda/Pedido/index')->with('carritos', $carritos)->with('pedidosGroup', $pedidosGroup)->with('pedidos', $pedidos);
  }
}
