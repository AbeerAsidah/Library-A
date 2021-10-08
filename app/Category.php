<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function books(){
        //one to many
        return $this->hasMany(Book::class);
    }
}
