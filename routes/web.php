<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;

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
    return view('welcome');
});

Auth::routes();
//Manager
Route::get('/manager',[App\Http\Controllers\ManagerController::class, 'loggin']);
Route::get('/manager/r',[App\Http\Controllers\ManagerController::class, 'register']);
Route::get('/manager/clubs',[ManagerController::class,'index_clubs']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
