<?php

use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\EquipoController;

Route::resource('equipos', EquipoController::class);

Route::controller(UserController::class)->group(function(){
    Route::get('desktop-1','home');
    Route::get('desktop-5','contacto');
    Route::get('desktop-9','pruebavista');
    Route::get('desktop-26','emergentesesion');
    Route::get('desktop-27','regisclien');
    Route::get('desktop-4','Registro');
    Route::get('desktop-13','sesion');
    Route::get('desktop-12','catalogo');
    Route::get('desktop-22','buscar');
    Route::get('desktop-25','confirmacionregistro');
    Route::get('desktop-10','micuenta');
    Route::get('desktop-14','micuentamod');
    Route::get('desktop-16','confirmacionguardado');
    
});
Route::controller(AdminController::class)->group(function(){
    Route::get('desktop-6','regisadmin');
    Route::get('desktop-7','iniciosesionAdmin');
    Route::get('desktop-8','solicitudes');
    Route::get('desktop-11','versoli');
    Route::get('Crud','crud');
    Route::get('index','index');
    Route::get('create','create');
    Route::get('edit','edit');
    Route::get('show','show');
 
   
    
    
});

Route::controller(EquipoController::class)->group(function(){
    Route::get('index','index');
    Route::get('solicitudes','solicitudes');
    Route::get('rechazadas','rechazadas');
    Route::get('cat1','cat1');
    Route::get('cat2','cat2');
    Route::get('cat3','cat3');
    Route::get('cat4','cat4');
    Route::get('cat5','cat5');
    Route::get('cat6','cat6');
   
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
