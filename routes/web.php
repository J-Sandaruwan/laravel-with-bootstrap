<?php

use App\Http\Controllers\Index\IndexController as IC;
use App\Http\Controllers\User\UserController as UC;
use Illuminate\Support\Facades\Route;

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



// Index
Route::get('/', [IC::class, "index"])->name('index');

// Users
Route::resource('users', UC::class);
