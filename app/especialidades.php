<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidades extends Model
{
    

    protected $table = 'especialidades';
    // protected $primaryKey = 'id';
    protected $fillable = ['name'];
    public function especialidades()
    {
        return $this->hasOne(especialidades::class);
    }
}
