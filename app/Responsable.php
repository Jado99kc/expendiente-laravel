<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsables';

    public function paciente()
    {
        return $this->hasOne('App\Paciente');
    }

}
