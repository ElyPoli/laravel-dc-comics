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

// UPDATE
Route::get("/comics/{comic}/edit", [ComicController::class, "edit"])->name("comics.edit"); // ritorna una pagina con form per modificare l'elemento
Route::put("/comics/{comic}", [ComicController::class, "update"])->name("comics.update"); // leggo i dati e modifico l'elemento nella tabella del db

// DESTROY
Route::delete("/comics/{comic}", [ComicController::class, "destroy"])->name("comics.destroy"); // elimino l'elemento selezionato
