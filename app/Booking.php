<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    public function property(){
        return $this->belongsTo(Property::class);
    }
    
}
