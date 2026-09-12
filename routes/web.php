<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front-office.beranda');
});

Route::get('/admin', function () {
    return view('back-office.dasbord');
});
