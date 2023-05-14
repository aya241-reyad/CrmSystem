<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ProjectController;

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
    return redirect('login');
});
Route::controller(LoginController::class)->group(function () {
Route::post('/do-login', 'doLogin')->name('do-login');
Route::get('/login', 'viewLogin')->name('login');
Route::get('/logout', 'logout')->name('logout');
});
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::resource('clients', ClientController::class);
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::resource('tasks', TaskController::class);
Route::resource('projects', ProjectController::class);
