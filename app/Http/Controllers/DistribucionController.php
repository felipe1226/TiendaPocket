<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;

use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;
use PocketByR\Distribucion;
use PocketByR\Departamento;
use PocketByR\Ciudad;
use Auth;

class DistribucionController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    $distribucionesPag = Distribucion::Listar("18")->paginate(10);
    $distribuciones = Distribucion::Listar("18")->get();
    $departamentos = Departamento::all();
    $ciudades = Ciudad::all();
    return view('Tienda/Cuenta/distribuciones')->with('distribucionesPag', $distribucionesPag)->with('distribuciones',$distribuciones)->with('departamentos',$departamentos)->with('ciudades', $ciudades);
  }


  public function store(Request $request){
    $distribucion = new Distribucion;
    $distribucion->proveedor = Auth::user()->idEmpresa;
    $depto = Departamento::where('id', $request->idDepto)->get();
    $distribucion->departamento = $depto[0]->nombre;
    $distribucion->costo = $request->costo;

    $distribucion->save();

    return redirect('Distribuciones');
  }

  public function actualizar(Request $request){
    $distribucion = Distribucion::find($request->id);
    $distribucion->departamento = $request->departamento;
    $distribucion->costo = $request->costo;
    $distribucion->save();
  }


  public function eliminar(Request $request){
    $distribucion = Distribucion::find($request->id);
    $distribucion->delete();
  }
}
