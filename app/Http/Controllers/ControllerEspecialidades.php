<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\especialidades;

class ControllerEspecialidades extends Controller
{
    public function edit(Request $request, $slug)
    {

        return view('especialidades.show', ['especialidade' => $slug]);
    }

    public function novo()
    {
        return view('especialidades.novo');
    }
    public function home()
    {
        
        return view('especialidades.home');
    }
}
