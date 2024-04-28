<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('livewire-version');

Route::get('livewire/livewire.js', function() {
    return \Livewire\Drawer\Utils::class::pretendResponseIsFile(
        base_path('vendor/livewire/livewire/dist/livewire.min.js')
    );
});
