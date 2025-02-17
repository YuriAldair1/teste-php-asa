<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPacientes extends Controller
{
    //

    public function home(){
        return view('pacientes.home');
    }
    public function novo(){
        return view('pacientes.novo');
    }
    public function edit($paciente){
        
        return view('pacientes.show', ['paciente' => $paciente]);
        // return view('pacientes.novo');
    }

    
}
