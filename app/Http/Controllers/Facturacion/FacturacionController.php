<?php

namespace App\Http\Controllers\Facturacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function dashboard(){
        return view('facturacion.dashboard');
    }
    public function clientes(){
        return view('facturacion.clientes');
    }

}
