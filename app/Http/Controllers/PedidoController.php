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
    $carritos = Carrito::ConsultaCarrito($id_empresa)->get();

    $id_empresa = Auth::user()->idEmpresa;
    $pedidosGroup = Pedido::ListarxGroup($id_empresa)->get();
    $pedidos = Pedido::Listar($id_empresa)->get();
    return view('Tienda/Pedido/index')->with('carritos', $carritos)->with('pedidosGroup', $pedidosGroup)->with('pedidos', $pedidos);
  }
}
