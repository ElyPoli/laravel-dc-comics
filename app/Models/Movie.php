<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // importo il softdeletes

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    // Per alcuni dati specifico in che tipologia devono essere convertiti
    protected $casts = [
        "cast" => "array",
        "genres" => "array"
    ];

    // Creo un array al cui interno indico le colonne della tabella che voglio popolare
    protected $fillable = [
        "title",
        "year",
        "cast",
        "genres",
        "extract",
        "thumbnail",
    ];
}
