<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory, SoftDeletes;

    // Specifico in che tipologia convertire i dati che andrò a richiamare nelle views
    protected $casts = [
        "sale_date" => "date",
        "artists" => "array",
        "writers" => "array"
    ];
    
    // Creo un array semplice in cui all'interno indico le colonne che voglio popolare
    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type",
        "artists",
        "writers",
    ];
}
