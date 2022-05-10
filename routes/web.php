<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [TaskController::class, 'show_name']);
Route::post('/about', [TaskController::class, 'send_name']);
Route::get('/contact', [TaskController::class, 'index']);
Route::get('/contact/{id}', [TaskController::class, 'show']);

