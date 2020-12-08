<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::post("/task", "App\Http\Controllers\TaskController@store");
Route::get("/{id}/complete", "App\Http\Controllers\TaskController@complete");
Route::get("/{id}/delete", "App\Http\Controllers\TaskController@destroy");

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tasklist', [App\Http\Controllers\TaskController::class, 'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
