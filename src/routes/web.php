<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index']);
Route::get('/contacts/confirm', [ContactController::class, 'confirm']);
Route::POST('/contacts', [ContactController::class, 'store']);