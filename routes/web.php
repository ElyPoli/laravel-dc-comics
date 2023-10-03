<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/comics');

// CREATE
Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create"); // ritorna una pagina con form
Route::post("/comics", [ComicController::class, "store"])->name("comics.store"); // leggo i dati e aggiungo il nuovo elemento alla tabella del db

// READ
Route::get("/comics", [ComicController::class, "index"])->name("comics.index"); // recupero e poi mostro tutti i dati dalla relativa tabella del db
Route::get("/comics/{comic}", [ComicController::class, "show"])->name("comics.show"); // mostro i dettagli di un elemento specifico della relativa tabella del db 