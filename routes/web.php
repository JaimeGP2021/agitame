<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/konami', function () {
    return 'Up, Up, Down, Down, Left, Right, Left, Right, B, A';
});
