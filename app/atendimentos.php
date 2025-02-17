<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atendimentos extends Model
{
    protected $table = 'atendimentos';
    // protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id','data_atendimento','medico_id','paciente_id'];

    public function medico()
	{
		return $this->hasOne(Medicos::class, 'id','medico_id');
	}
    public function paciente()
	{
		return $this->hasOne(paciente::class, 'id','paciente_id');
	}
}