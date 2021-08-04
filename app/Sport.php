<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    /**
     * The clubs that belong to the sport.
     */
    public function clubs()
    {
        return $this->belongsToMany('App\Club');
    }
}
