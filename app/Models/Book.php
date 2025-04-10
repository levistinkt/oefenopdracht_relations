<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function Reviews(){

        return $this->hasMany(Review::class);

    }

    public function Genre(){

        return $this->belongsToMany(Genre::class);

    }
}
