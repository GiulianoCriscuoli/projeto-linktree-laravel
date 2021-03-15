<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/{slug}', [PageController::class, 'index']);