<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/generate-image', [ImageController::class, 'generateImage'])->name('generate.image');