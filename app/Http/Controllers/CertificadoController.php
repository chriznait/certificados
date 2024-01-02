<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function index()
    {
        return view('certificados.index');
    }
}
