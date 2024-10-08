<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route for the home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Routes for the contacts
Route::resource('contacts', ContactController::class);
