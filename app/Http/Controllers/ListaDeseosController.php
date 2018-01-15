<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class ListaDeseosController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    $carritos = Carrito::ConsultaDeseo($id_empresa)->get();
    return view('Tienda/ListadeDeseos/index')->with('carritos', $carritos);
  }

}
