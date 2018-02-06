<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use PocketByR\Carrito;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class TiendaController extends Controller
{


  public function __construct()
  {

  }
  public function index(request $request){

    return view('Tienda/Principal/index');
  }
}
