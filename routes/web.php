<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::fallback(NotFoundController::class);


Route::get('/', [TaskController::class, 'index'])->name('todo');

Route::get('/home', [TaskController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/create', [TaskController::class, 'store'])->name('task.store');

Route::put('/{task}/edit', [TaskController::class, 'update'])->name('tasks.update');

Route::delete('/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
