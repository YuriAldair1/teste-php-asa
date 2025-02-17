<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{

    protected $table = 'medicos';
    // protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','crm','especialidade_id'];

    protected $guarded = [];

    public function Medicos()
    {
        return $this->hasOne(Medicos::class);
    }
    public function especialidade()
	{
		return $this->hasOne(especialidades::class, 'id','especialidade_id');
	}
}
