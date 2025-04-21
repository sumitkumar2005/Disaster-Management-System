<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/alerts', [AlertController::class, 'showAlerts']);
Route::get('/resources', [ResourceController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
