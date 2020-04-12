<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    public function paciente()
    {
        return $this->hasOne('App\Paciente');
    }
}
