<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;

use PocketByR\Http\Requests;
use PocketByR\Carrito;
use PocketByR\Direccion;
use Laracasts\Flash\Flash;
use PocketByR\Http\Controllers\Controller;
use Auth;

class CarritoController extends Controller
{

    public function __construct()
    {

    }

    public function index(){
      $direcciones = Direccion::Listar(Auth::user()->idEmpresa)->get();
      $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
      return view('Tienda/Carrito/resumen')->with('carritos',$carritos)->with('direcciones', $direcciones);
    }


    public function store(Request $request){
    }

    public function agregarCarrito(Request $request){
      $existe = Carrito::where('id_articulo', $request->id_articulo)->get();
      if(count($existe) > 0){
        $cant = 0;
        $cant = $existe[0]->cantidad + 1;
        $carrito = Carrito::find($existe[0]->id);
        $carrito -> fill([
            // Empaquetamos los Datos  y los envamos al Insert
            'cantidad' => $cant
            ]);
        $carrito -> save();

      }
      else{
        $carrito = new Carrito;
        $carrito->id_empresa = Auth::user()->idEmpresa;
        $carrito->id_articulo = $request->id_articulo;
        $carrito->cantidad = 1;
        $carrito->estado = 1;

        $carrito->save();
      }
    }


    public function agregarDeseo(Request $request){
        $carrito = new Carrito;
        $carrito->id_empresa = Auth::user()->idEmpresa;
        $carrito->id_articulo = $request->id_articulo;
        $carrito->cantidad = 1;
        $carrito->estado = 0;

        $carrito->save();
    }

    public function DeseoCarrito(Request $request){
      $carrito = Carrito::find($request->id);
      $carrito->estado = 1;
      $carrito->save();
    }


    public function direcciones(){
      $direcciones = Direccion::Listar(Auth::user()->idEmpresa)->get();
      $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();

      return view('Tienda/Carrito/direccion')->with(['carritos' => $carritos])->with('direcciones', $direcciones);
    }

    public function pago(){

      $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();

      return view('Tienda/Carrito/pago')->with(['carritos' => $carritos]);
    }


    public function modificarCant(Request $request){
      $carrito = Carrito::find($request->id);
      $carrito->cantidad = $request->cantidad;
      $carrito->save();
    }


    public function eliminar(Request $request){
      $carrito = Carrito::find($request->id);
      $carrito->delete();
    }


    public function ListaDeseos(){
      $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
      $deseos = Carrito::ConsultaDeseo(Auth::user()->idEmpresa)->get();
      return view('Tienda/ListaDeseos/index')->with('carritos', $carritos)->with('deseos', $deseos);

    }
}
