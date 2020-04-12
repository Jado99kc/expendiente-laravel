<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'patients';
    //Relacion muchos a uno
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
