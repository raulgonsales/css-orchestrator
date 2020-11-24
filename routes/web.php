<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/api-doc', function () {
    return view('pages.api-doc');
});
