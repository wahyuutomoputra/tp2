<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [Users::class, 'index']);
Route::post('/users/login', [Users::class, 'login']);

