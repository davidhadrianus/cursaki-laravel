<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('signin', function () {
    return view('livewire.auth.signin');
});
