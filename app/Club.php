<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Club extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'city_id',
    ];
    
    /**
     * The sports that belong to the club.
     */
    public function sports()
    {
        return $this->belongsToMany('App\Sport');
    }

}
