<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('/home', function () {
//     return view('layouts/welcome');
// });

Route::get('/home', [MainController::class, 'train']);
