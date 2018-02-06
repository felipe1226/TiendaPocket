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
    if($request->id_articulo == "-1"){
      $articulo = new Articulo;
      $articulo->id_proveedor = Auth::user()->id;
      $articulo->nombre = $request->nombre;
      $articulo->categoria = $request->categoria;
      $articulo->marca = $request->marca;
      $articulo->cantidad = $request->cantidad;
      $articulo->precio = $request->precio;
      $articulo->descripcion = $request->descripcion;
      $articulo->descuento = $request->valDescuento;
      $articulo->color = $request->color;
      $articulo->calificacion = "3";

      $img = $request->file('imagen1');
      $file_route = time().'_'.$img->getClientOriginalName();
      Storage::disk('imgArticulos')->put($file_route, file_get_contents( $img->getRealPath()));
      $articulo->imagen1 = $file_route;

      $img = $request->file('imagen2');
      if($img != null){
        $file_route = time().'_'.$img->getClientOriginalName();
        Storage::disk('imgArticulos')->put($file_route, file_get_contents( $img->getRealPath()));
        $articulo->imagen2 = $file_route;
      }
      $img = $request->file('imagen3');
      if($img != null){
        $file_route = time().'_'.$img->getClientOriginalName();
        Storage::disk('imgArticulos')->put($file_route, file_get_contents( $img->getRealPath()));
        $articulo->imagen3 = $file_route;
      }

      $articulo->save();
      Flash::success("El articulo se ha registrado satisfactoriamente!")->important();
      return redirect('RegistrarArticulo');
    }

  }


  public function ArtsCategoria($categoria){
    if($categoria == "Nuevos"){
      $arts = Articulo::BuscarNuevos()->get();
      $articulos = Articulo::BuscarNuevos()->paginate(12);
    }
    else{
      $arts = Articulo::BuscarxCategoria($categoria)->get();
      $articulos = Articulo::BuscarxCategoria($categoria)->paginate(20);
    }
    $allCarritos = Carrito::where('id_empresa', Auth::user()->idEmpresa)->get();
    return view('Tienda/Articulo/index')->with('articulos', $articulos)->with('arts', $arts)->with('allCarritos', $allCarritos)->with('categoria', $categoria);
  }

  public function busquedaAvanzada($categoria, $articulo){
    $arts = Articulo::BusquedaArticulo($categoria,$articulo)->get();
    $articulos = Articulo::BusquedaArticulo($categoria,$articulo)->paginate(20);
    $allCarritos = Carrito::where('id_empresa', Auth::user()->idEmpresa)->get();
    return view('Tienda/Articulo/index')->with('articulos', $articulos)->with('arts', $arts)->with('allCarritos', $allCarritos)->with('categoria', $categoria)->with('art', $articulo);
  }


  public function articulosNuevos(){
    $allCarritos = Articulo::all();
    return view('Tienda/Articulo/index')->with('articulos', $articulos)->with('arts', $arts)->with('allCarritos', $allCarritos)->with('art', $articulo);
  }


  public function ArtsProveedor(){
    $articulos = Articulo::BuscarxProveedor("35")->paginate(15);
    return view('Tienda/Cuenta/articulos', compact('articulos'))->with(['articulos' => $articulos]);
  }

  public function registrarArticulo(){
    return view('Tienda/Articulo/RegistrarArticulo');
  }

  public function actualizar($id){
    $articulo = Articulo::find($id);
    return view('Tienda/Articulo/RegistrarArticulo')->with('articulo', $articulo);
  }


  public function verArticulo($id_articulo){
    $articulo = Articulo::where('id',$id_articulo)->get();
    $comentariosPag=Comentario::ListarComentarios($id_articulo)->paginate(10);
    $comentarios=Comentario::ListarComentarios($id_articulo)->get();

    return view('Tienda/Articulo/detalles')  ->with('articulos', $articulo)->with('comentarios', $comentarios)->with('comentariosPag', $comentariosPag);
  }
  public function verVistaArticulo($id_articulo){
    $articulo = Articulo::where('id',$id_articulo)->get();
    $comentarios=Comentario::ListarComentarios($id_articulo)->get();
    return view('Tienda/Articulo/verArticulo')  ->with('articulo', $articulo)->with('comentarios',$comentarios);
  }

  public function vistaRapida(){
    return view('Tienda/Articulo/verArticulo');
  }

  public function agregarComentario(Request $request){
    $comentarios = new Comentario;
    $comentarios->id_empresa = Auth::user()->idEmpresa;
    $comentarios->id_articulo = $request->id_articulo;
    $comentarios->calificacion = $request->calificacion;
    $comentarios->comentario = $request->comentario;

    $comentarios->save();

    $articulo = Articulo::find($request->id_articulo);
    $articulo->calificacion = $request->nuevacalificacion;
    $articulo->save();
  }
}
