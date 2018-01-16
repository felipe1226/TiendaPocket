<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;
use PocketByR\Usuario;
use PocketByR\Mensaje;
use PocketByR\Carrito;


class MensajeriaController extends Controller
{

	public function __construct(){

	}

    public function index(){
			$mensajes = Mensaje::where('id_emisor',Auth::user()->id)->get();
			$carritos = Carrito::where('id_empresa',Auth::user()->idEmpresa)->get();
	    $usuarios = Usuario::where('id',Auth::user()->id)->get();
	    return view('Mensajes/index')->with('mensajes', $mensajes)->with('usuarios', $usuarios)->with('carritos', $carritos);
    }
}
