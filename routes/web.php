<?php

use App\Http\Controllers\CustomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/id/{id}', [CustomController::class,'index'])->name('custom_route');

Route::resource('todos', \App\Http\Controllers\TodoController::class);
Route::get('todos/{todo}', [\App\Http\Controllers\TodoController::class,'destroy'])->name('todos.destory');
