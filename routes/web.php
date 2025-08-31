<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::view('/login', 'login')->name('login');

Route::view('/register', 'register')->name('register');
