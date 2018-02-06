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
    return view('Tienda/ListadeDeseos/index');
  }

}
