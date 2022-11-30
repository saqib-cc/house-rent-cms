<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function subcategory(){

        return $this->hasMany(Subcategory::class);
    }
    
    public function expense(){
        return $this->hasMany(Expense::class);
    }
     public function income(){
         return $this->hasMany(Income::class);
     }
}
