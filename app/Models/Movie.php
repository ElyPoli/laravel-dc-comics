<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Per alcuni dati specifico in che tipologia devono essere convertiti
    protected $casts = [
        "cast" => "array",
        "genres" => "array"
    ];
}
