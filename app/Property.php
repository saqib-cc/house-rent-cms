<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
