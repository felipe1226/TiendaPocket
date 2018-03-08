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
use PocketByR\Http\Requests\DireccionRequest;
use PocketByR\Http\Controllers\Controller;

class DireccionController extends Controller
{
  public function __construct()
  {

  }

  public function index(){

    $direcciones = Direccion::Listar(Auth::user()->idEmpresa)->get();
    return view('Tienda/Direccion/index')->with('direcciones', $direcciones);
  }

    public function registrarDireccion(){
      $departamentos = Departamento::all();
      $ciudades = Ciudad::all();
      $direccion = null;

      return view('Tienda/Direccion/RegistrarDireccion')->with('direccion', $direccion)->with('departamentos', $departamentos)->with('ciudades', $ciudades);
    }

    public function actualizar($id){
      $departamentos = Departamento::all();
      $ciudades = Ciudad::all();
      $direccion = Direccion::find($id);

      return view('Tienda/Direccion/RegistrarDireccion')->with('direccion', $direccion)->with('departamentos', $departamentos)->with('ciudades', $ciudades);
    }

    public function store(Request $request){
      if($request->id_direccion == "0"){
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

      Flash::success("La direccion se ha registrado satisfactoriamente!")->important();


    }else{
      $direccion=Direccion::find($request->id_direccion);
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
      Flash::success("La direccion se ha Actualizar satisfactoriamente!")->important();
    }
    $direccion->save();
    return redirect('RegistrarDireccion/');

  }

    public function eliminar(Request $request){
      $direccion = Direccion::find($request->id);
      $direccion->delete();
    }

    public function update(Request $request){
      $direccion = Direccion::find($request->id);

      $direccion->fill($request->all());
      $direccion->save();
    }

}
