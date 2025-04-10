<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function User(){

        return $this->belongsTo(User::class);

    }

    public function Book(){

        return $this->belongsTo(Book::class);

    }
}
