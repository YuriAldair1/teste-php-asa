<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAtendimentos extends Controller
{
    public function home()
    {   
        return view('atendimentos.home');
    }
    public function novo()
    {   
        return view('atendimentos.novo');
    }
}
