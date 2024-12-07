<?php

use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Logout;
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

Route::get('/loginpage',[AuthController::class,'loginform'])->name('loginpage');



Route::middleware(['auth','role:admin'])->group(function()
{
Route::get('/admin',[AuthController::class,'admin'])->name('adminpage');

});

Route::middleware(['auth','role:user'])->group(function()
{
Route::get('/user',[AuthController::class,'user'])->name('userpage');

});

Route::post('/login',[AuthController::class,'dashboard'])->name('login-dash');

Route::post('/logout',[AuthController::class,'logout'])->name('logoutpage');


