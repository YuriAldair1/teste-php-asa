<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMedicos extends Controller
{
    public function home()
    {
        return view('medicos.home');
    }
    public function edit(Request $request, $slug)
    {
        return view('medicos.show', ['medico' => $slug]);
    }
    public function novo()
    {
        return view('medicos.novo');
    }
}
