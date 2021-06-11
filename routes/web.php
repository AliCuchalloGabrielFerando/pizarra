<?php

use App\Http\Controllers\PersonaController;
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

Route::get('/', function () {
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