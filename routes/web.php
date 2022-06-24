<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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


Route::get('/', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register', [CustomAuthController::class, 'registerUser'])->name('register');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/editDatabase', [CustomAuthController::class, 'editDatabase']);
Route::get('/logout', [CustomAuthController::class, 'logout']);
Route::get('delete/{id}', [CustomAuthController::class, 'delete']);
Route::get('edit/{id}', [CustomAuthController::class, 'showData']);
Route::post('edit', [CustomAuthController::class, 'update']);