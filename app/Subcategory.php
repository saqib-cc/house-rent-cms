<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function expense(){
        return $this->hasMany(Category::class);
    }
    
    public function income(){
        return $this->hasMany(Income::class);
    }
}
