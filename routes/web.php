<?php

use App\Http\Controllers\PlayerController;
use App\Models\Player;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/players', function() {
    return view('players');
});


Route::get('/players', [PlayerController::class, 'index']);

Route::get('/players/csv-all', [PlayerController::class, 'generateCSV']);

Route::get('/players/pdf', [PlayerController::class, 'pdf']);


Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');


Route::post('/players/import', [PlayerController::class, 'importCsv'])->name('player.import');
// Route::get('/players/{id}', [PlayerController::class, 'show'])->name('player.show');
Route::get('/players', [PlayerController::class, 'index'])->name('players');

Route::get('/players/create', [PlayerController::class, 'create']);
Route::post('/players/store', [PlayerController::class, 'store'])->name('players.store');



