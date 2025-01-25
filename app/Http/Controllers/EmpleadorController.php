<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadorController extends Controller
{
    public function index(){

        return view('empleador.em_updatedata');
    }

}
