<?php

use App\Http\Controller\UserController;
use Illuminate\support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class,'index']);
