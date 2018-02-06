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
    $pedidosGroup = Pedido::ListarxGroup(Auth::user()->idEmpresa)->get();
    $pedidos = Pedido::Listar(Auth::user()->idEmpresa)->get();
    return view('Tienda/Pedido/index')->with('pedidosGroup', $pedidosGroup)->with('pedidos', $pedidos);
  }

  public function store(Request $request){
    $pedido = new Pedido;
    $pedido->id_empresa = Auth::user()->id;
    $pedido->referencia = $request->nombre;
    $pedido->proveedor = $request->categoria;
    $pedido->costoTotal = $request->marca;
    $pedido->estado = $request->cantidad;
    $pedido->referencia_direccion = $request->precio;
    $pedido->nombre = $request->impuesto;
    $pedido->direccion = $request->descripcion;
    $pedido->localidad = $request->nombre;
    $pedido->telefono = $request->categoria;
    $pedido->movil = $request->marca;
    $pedido->id_articulo = $request->cantidad;
    $pedido->nobre_articulo = $request->precio;
    $pedido->prexio_articulo = $request->impuesto;
    $pedido->cantidad_articulo = $request->descripcion;
    $pedido->tipo_pago = $request->impuesto;
    $pedido->comentario = $request->descripcion;

    $pedido->save();
    return view('Tienda/Pedido/index');
  }

}
