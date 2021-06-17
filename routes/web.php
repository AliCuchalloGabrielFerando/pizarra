<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonaController;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/a', function () {
    $nombre = "ali";
    return view('layout',["nombre"=>$nombre]);
});
Route::get('/home',function(){
    $arreglo =[
            ['nombre'=>'fer'],
            ['nombre'=>'da'],
            ['nombre'=>'al']
    ];
    $nombre = "ali";
    return view('home',["nombre"=>$nombre,"arreglo"=>$arreglo]);
})->name('home');

Route::resource('persona',PersonaController::class);


Route::get('dashboard',function(){
    return view('dashboard');
})->name('dashboard')->middleware('auth');
Route::get('',function(){
    return view('welcome');
});
Route::get('login',function(){
    return view('user/login');
})->name('login')->middleware('guest');
Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout']);

