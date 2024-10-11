<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LoginComponent;

Route::get('/login', LoginComponent::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

