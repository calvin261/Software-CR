<?php

namespace App\Http\Controllers\Contabilidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContabilidadController extends Controller
{
    public function dashboard(){
        return view('contabilidad.dashboard');
    }
    public function empleados(){
        return view('contabilidad.empleados');
    }
    public function puntoEquilibrio(){
        return view('contabilidad.puntoEquilibrio');
    }
}
