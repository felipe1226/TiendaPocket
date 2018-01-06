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
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();

    $id_empresa = Auth::user()->idEmpresa;
    $pedidos = Pedido::Listar($id_empresa)->get();
    return view('Tienda/Pedido/index')->with('carritos', $carritos)->with('pedidos', $pedidos);
  }
}
