<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index() {
        $data = Comic::all();

		return view('index', [
            "comicsList" => $data
        ]);
    }
}