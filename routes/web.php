<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\clientController;  //Se llama al controlador
use App\Http\Controllers\chatController;


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


Route::resource('contacto',contactController::class);

Route::group(['prefix'=>'contacto','as'=>'contacto.'],function(){
    Route::get('welcome',[contactController::class,'welcome'])->name('welcome');
    Route::get('create',[contactController::class,'create'])->name('create');
    Route::post('store',[contactController::class,'store'])->name('store');
});


Route::resource('cliente',clientController::class);

Route::group(['prefix'=>'cliente','as'=>'cliente.'],function(){
    Route::get('welcome',[clientController::class,'welcome'])->name('welcome');
    Route::get('create',[clientController::class,'create'])->name('create');
    Route::post('store',[clientController::class,'store'])->name('store');
});

Route::resource('chat',chatController::class);

Route::group(['prefix'=>'chat','as'=>'chat.'],function(){
    Route::get('welcome',[chatController::class,'welcome'])->name('welcome');
    Route::get('create',[chatController::class,'create'])->name('create');
    Route::post('store',[chatController::class,'store'])->name('store');
});
