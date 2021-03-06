<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// commit 2 test

Route::get('home',function () {
    return view("home");
});

use App\Http\Controllers\UserController;

Route::get('/login', [UserController::class,'getLogin'])->name("login") ;
Route::post('/login', [UserController::class,'postLogin']) ;


Route::get('/sign-up', [UserController::class,'getSignUp']) ;
Route::post('/sign-up', [UserController::class,'postSignUp']) ;
;


Route::get('users',[UserController::class,'getUsers'])->name('users.list');



Route::post('/sign-up', [UserController::class,'postSignUp']) ;
Route::get('feed' , [DashboardController::class,'getFeed'])->name('dashboard');
