<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::get('/satu', [CollectionController::class,'satu']);
Route::get('/dua', [CollectionController::class,'dua']);
Route::get('/tiga', [CollectionController::class,'tiga']);
Route::get('/empat', [CollectionController::class,'empat']);
