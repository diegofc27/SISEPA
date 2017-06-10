<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public function estimaciones(){
    	return $this->hasMany(App\Estimacion);
    }
}
