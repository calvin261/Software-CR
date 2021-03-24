<?php

namespace App\Http\Controllers\Almacenamiento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlmacenamientoController extends Controller
{
    public function dashboard(){
        return view('almacenamiento.dashboard');
    }
    public function proveedores(){
        return view('almacenamiento.proveedores');
    }
}
