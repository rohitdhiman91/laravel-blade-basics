<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = ['name' => 'Rohit'];
    return view('home', compact('user'));
});
