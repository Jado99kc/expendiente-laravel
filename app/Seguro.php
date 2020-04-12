<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $table = 'seguros';

    public function paciente()
    {
        return $this->hasOne('App\Paciente');
    }
}
