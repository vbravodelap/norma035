<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function environmentSurveys(){
        return $this->hasMany(Environment::class);
    }

    public function riskSurveys(){
        return $this->hasMany(Risk::class);
    }

    public function traumaticSurveys(){
        return $this->hasMany(Traumatic::class);
    }
}
