<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostumAuthController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/login',[CostumAuthController::class,'login']);
Route::get('/register',[CostumAuthController::class,'registration']);
Route::post('/login',[CostumAuthController::class,'registeruser'])->name('register-user');
Route::post('/login-user',[CostumAuthController::class,'loginuser'])->name('login-user');
Route::get('/dashboard',[CostumAuthController::class,'dashboard'])->name('dashboard')->middleware('isloggedin');
Route::get('/logout',[CostumAuthController::class,'logout'])->name('logout');
