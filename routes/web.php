<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("change-locale/{locale}", App\Http\Controllers\LanguageSwitcher::class)->name("locale");

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', App\Http\Controllers\UserController::class);
