<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('workers', function () {
    dd('hello');
    return 'Its here workers';
});
