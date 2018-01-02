<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use PocketByR\Direccion;
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

  public function registrarDireccion(){
    $direccion = new Direccion;
    $direccion->id_proveedor = Auth::user()->id;
    $direccion->nombre = $request->nombre;
    $direccion->categoria = $request->categoria;
    $direccion->marca = $request->marca;
    $direccion->cantidad = $request->cantidad;
    $direccion->precio = $request->precio;
    $direccion->impuesto = $request->impuesto;
    $direccion->descripcion = $request->descripcion;
    $direccion->save();
    Flash::success("La direccion se ha registrado satisfactoriamente!")->important();
    return redirect('AgregarDireccion');

  }


  public function direcciones(){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    $direcciones = Direccion::Listar(Auth::user()->idEmpresa)->get();
    return view('Tienda/Cuenta/direcciones')->with(['direcciones' => $direcciones])->with('carritos', $carritos);
  }

  public function nuevaDireccion(){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/Cuenta/nuevaDireccion')->with('carritos', $carritos);
  }

  public function pedidos(){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    //$pedidos = Pedido::Listar(Auth::user()->idEmpresa)->get();
    return view('Tienda/Pedidos/index2')->with('carritos', $carritos);
  }

  public function eliminarDireccion(Request $request){
    $direccion = Direccion::find($request->id);
    $direccion->delete();
  }

}
