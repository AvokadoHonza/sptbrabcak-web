<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrvniController;

Route::get('/', [PrvniController::class, 'index']);

Route::get('/test', function () {
    return view('test');
});
