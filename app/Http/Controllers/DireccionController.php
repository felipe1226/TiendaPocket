<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use PocketByR\Direccion;
use PocketByR\Departamento;
use PocketByR\Ciudad;
use Laracasts\Flash\Flash;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class DireccionController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();
    $direcciones = Direccion::Listar(Auth::user()->idEmpresa)->get();
    return view('Tienda/Direccion/index')->with('direcciones', $direcciones)->with('carritos', $carritos);
  }


    public function registrarDireccion(){
      $departamentos = Departamento::all();
      $ciudades = Ciudad::all();
      $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();

      return view('Tienda/Direccion/RegistrarDireccion')->with('carritos', $carritos)->with('departamentos', $departamentos)->with('ciudades', $ciudades);
    }

    public function actualizarDireccion(request $request){
      $departamentos = Departamento::all();
      $ciudades = Ciudad::all();
      $carritos = Carrito::ConsultaCarrito(Auth::user()->idEmpresa)->get();

      $direccion = Direccion::where('id_articulo', $request->id_articulo)->get();


      return view('Tienda/Direccion/RegistrarDireccion')->with('carritos', $carritos)->with('departamentos', $departamentos)->with('ciudades', $ciudades);
    }




    public function store(Request $request){
      $direccion = new Direccion;
      $direccion->id_empresa = Auth::user()->idEmpresa;
      $direccion->referencia = $request->referencia;
      $direccion->nombres = $request->nombres;
      $direccion->apellidos = $request->apellidos;
      $depto = Departamento::where('id', $request->departamento)->get();
      $direccion->departamento = $depto[0]->nombre;
      $direccion->ciudad = $request->ciudad;
      $direccion->direccion = $request->direccion;
      $direccion->movil = $request->movil;
      if($request->telefono != ""){
          $direccion->telefono = $request->telefono;
      }

      $direccion->informacion = $request->informacion;
      $direccion->estado = 0;
      $direccion->save();
      Flash::success("La direccion se ha registrado satisfactoriamente!")->important();
      return redirect('RegistrarDireccion/');

    }


  public function update(){

  }
}
