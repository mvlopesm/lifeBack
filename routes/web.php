<?php

use App\Http\Controllers\ResultsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/results', [ResultsController::class, 'index']);
Route::get('/results/{id}', [ResultsController::class, 'show']);
Route::get('/results/create', [ResultsController::class, 'store']);
