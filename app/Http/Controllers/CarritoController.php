<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;

use PocketByR\Http\Requests;
use PocketByR\Carrito;
use Laracasts\Flash\Flash;
use PocketByR\Http\Controllers\Controller;
use Auth;

class CarritoController extends Controller
{

    public function __construct()
    {

    }

    public function store(Request $request){
      $carrito = new Carrito;
      $carrito->id_empresa = Auth::user()->idEmpresa;
      $carrito->id_articulo = $request->id_articulo;
      $carrito->cantidad = 1;

      $carrito->save();
      return redirect('Articulos/'.$request->categoria);
    }


    public function ListarCarrito(){
      $id_empresa = Auth::user()->idEmpresa;

      $carritos = Carrito::ConsultaCarrito($id_empresa)->get();

      return view('Tienda/Carrito/index')->with(['carritos' => $carritos]);


    }

}
