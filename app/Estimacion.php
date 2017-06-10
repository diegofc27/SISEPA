<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimacion extends Model
{
    public function contratos()
    {
        return $this->belongsTo('App\Post');
    }
}
