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

        $carrito->save();
      }

      if($request->vista == "articulos"){
        Flash::success("Se ha guardado el articulo en el carrito satisfactoriamente!")->important();
        return redirect('Articulos/'.$request->categoria);
      }

      else{
        flash::success('Carrito actualizado!')->important();
        return redirect('Carrito/');
      }

    }

    public function ListarCarrito(){
      $id_empresa = Auth::user()->idEmpresa;

      $carritos = Carrito::ConsultaCarrito($id_empresa)->get();

      return view('Tienda/Carrito/index')->with(['carritos' => $carritos]);
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
}
