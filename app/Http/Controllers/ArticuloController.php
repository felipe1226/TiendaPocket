<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

use PocketByR\Articulo;
use PocketByR\Carrito;
use PocketByR\Comentario;
use Laracasts\Flash\Flash;
use Auth;
use Storage;
class ArticuloController extends Controller
{

  public function __construct()
  {

  }


  public function store(Request $request){
    $articulo = new Articulo;
    $articulo->id_proveedor = Auth::user()->id;
    $articulo->nombre = $request->nombre;
    $articulo->categoria = $request->categoria;
    $articulo->marca = $request->marca;
    $articulo->cantidad = $request->cantidad;
    $articulo->precio = $request->precio;
    $articulo->impuesto = $request->impuesto;
    $articulo->descripcion = $request->descripcion;
    $img = $request->file('imagenArticulo');

    $file_route = time().'_'.$img->getClientOriginalName();
    Storage::disk('imgArticulos')->put($file_route, file_get_contents( $img->getRealPath()));

    $articulo->imagen = $file_route;
    $articulo->save();
    Flash::success("El articulo se ha registrado satisfactoriamente!")->important();
    return redirect('RegistrarArticulo/');
  }


  public function ArtsCategoria($categoria){
    $articulos = Articulo::BuscarxCategoria($categoria)->paginate(20);
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();

    return view('Tienda/Articulo/index', compact('articulos'))->with(['articulos' => $articulos])->with('carritos', $carritos);
  }

  public function ArtsProveedor(){
    $articulos = Articulo::BuscarxProveedor("35")->paginate(20);
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();

    return view('Tienda/Cuenta/articulos', compact('articulos'))->with(['articulos' => $articulos])->with('carritos', $carritos);
  }

  public function registrarArticulo(request $request){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
    return view('Tienda/Articulo/RegistrarArticulo')->with('carritos',$carritos);
  }

  public function verArticulo($id_articulo){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
    $articulo = Articulo::where('id',$id_articulo)->get();
    return view('Tienda/Articulo/detalles')->with('carritos',$carritos)->with('articulos', $articulo);
  }
  public function verVistaArticulo($id_articulo){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
    $articulo = Articulo::where('id',$id_articulo)->get();
    return view('Tienda/Articulo/verArticulo')->with('carritos',$carritos)->with('articulo', $articulo);
  }

  public function vistaRapida(){
    return view('Tienda/Articulo/verArticulo');
  }

  public function agregarComentario(Request $request){
    $comentarios = new Comentario;
    $comentarios->id_empresa = Auth::user()->idEmpresa;
    $comentarios->id_articulo = $request->id_articulo;
    $comentarios->calificacion = $request->calificacion;
    $comentarios->titulo = $request->titulo;
    $comentarios->comentario = $request->comentario;

    $comentarios->save();

  }

}
