<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $table = 'pacientes';
    // protected $primaryKey = 'id';
    protected $fillable = ['name', 'data_nasc', 'email', 'cpf'];
}
