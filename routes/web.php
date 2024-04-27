<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('livewire-version');

Route::get('/alpinejs-version', function () {
    return view('alpine-index');
})->name('alpine-version');
