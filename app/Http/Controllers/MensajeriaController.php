<?php

namespace PocketByR\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PocketByR\Http\Requests;
use PocketByR\Http\Controllers\Controller;

class MensajeriaController extends Controller
{

	public function __construct(){

	}

    public function index()
    {
        return View('Mensajes/index');
    }
}
