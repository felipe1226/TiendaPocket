<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class InformacionPersonalController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    $carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
    return view('Tienda/InformacionPersonal/index')->with('carritos', $carritos);
  }

}
