<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use PocketByR\Direccion;
use PocketByR\Departamento;
use PocketByR\Ciudad;
use PocketByR\Articulo;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class CuentaController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    return view('Tienda/Cuenta/index');
  }

  public function informacionPersonal(){
    return view('Tienda/InformacionPersonal/index');
  }
}
