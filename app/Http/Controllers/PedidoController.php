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
    $pedido->factura = $request->factura;
    $pedido->id_empresa = Auth::user()->idEmpresa;
    $proveedor = Proveedor::where('idEmpresa', $request->proveedor)->get();
    $pedido->proveedor = $proveedor[0]->nombre;
    $pedido->costoTotal = $request->costoTotal;
    $pedido->estado = $request->estado;
    $pedido->fecha_envio = "0000-00-00";
    $pedido->fecha_entrega = "0000-00-00";
    $pedido->referencia_direccion = $request->referencia_direccion;
    $pedido->nit = $request->nit;
    $pedido->nombre = $request->nombre;
    $pedido->direccion = $request->direccion;
    $pedido->localidad = $request->localidad;
    $pedido->telefono = $request->telefono;
    $pedido->movil = $request->movil;
    $pedido->id_articulo = $request->id_articulo;
    $pedido->nombre_articulo = $request->nombre_articulo;
    $pedido->precio_articulo = $request->precio_articulo;
    $pedido->cantidad_articulo = $request->cantidad_articulo;
    $pedido->tipoPago = $request->tipoPago;
    $pedido->comentario = $request->comentario;
    $pedido->save();
  }

}
