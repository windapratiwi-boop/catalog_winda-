<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;


Route::get('/', [HalamanController::class, 'home'])->name("home");
Route::get('/admin', function () {
    return view('back-office.dasbord');
});
