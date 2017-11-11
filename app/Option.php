<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function stronger()
    {
        return $this->hasMany('App\Stronger');
    }

    // To do for eventual extension
    
    public function weaker() {
        return $this->hasMany('App\Weaker');
    }
}
