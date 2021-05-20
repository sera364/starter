<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\StudentController;


use App\Http\Controllers\Admin\SecondController;
use App\Http\Controllers\NewsController;



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
Route::get('/test', function () {
        return'hello sara';
});

Route::get('/test1/{id}', function ($id) {
    return $id;
})->name('ga');

Route::get('/test2/{id?}', function () {
    return 'welcome';
})->name('sara');;

Route::namespace('Front')->group(function(){
    Route::get('/users',[UserController::class,'show']);
    Route::get('/index',[UserController::class,'getIndex']);
});
Route::group(['namespace'=>'Admin'],function(){
    Route::get('/second',[SecondController::class,'showString']);
    Route::get('/second1',[SecondController::class,'showString1']);
    Route::get('/second2',[SecondController::class,'showString2']);
});

Route::get('/login',function(){
    return'you should login';
})->name('login');


Route::resource('news',NewsController::class);

Route::get('/landing',function(){
    return view('landing');
});







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/send/email',[StudentController::class, 'mail']);
