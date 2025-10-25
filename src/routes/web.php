<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class , 'question']);
Route::get('/thanks', [TestController::class , 'thanks']);
Route::get('/confirm', [TestController::class , 'confirm']);
Route::get('/admin', [TestController::class , 'admin']);

Route::post('/testregister', [TestController::class, 'register']);
Route::post('/confirm',[TestController::class, 'logi']);
Route::post('/quest-c',[TestController::class, 'quest']);
Route::post('/questconfirm',[TestController::class, 'thank']);