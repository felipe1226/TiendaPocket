<?php

namespace PocketByR\Http\Controllers;
use Illuminate\Http\Request;
use PocketByR\Http\Requests;
use PocketByR\Contactenos;
use PocketByR\Http\Controllers\Controller;
use Laracasts\Flash\Flash;


use Storage;

class ContactenosController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $Request0){
      return view('Tienda/Contactenos');
    }
    public function store(Request $request){
      $contactenos = new Contactenos;
      $contactenos->titulo = $request->titulo;
      $contactenos->email= $request->email;
      $contactenos->referencia_pedido = $request->referencia_pedido;
      $contactenos->mensaje = $request->mensaje;
      $contactenos->save();
      Flash::success("Sus comentarios se han registrado satisfactoriamente")->important();
      return redirect('Contactenos/');
    }
}
