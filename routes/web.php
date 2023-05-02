<?php

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

//Inicio
Route::view('/','welcome')-> name('Home');
//Tienda
Route::view('/Tienda','Store')-> name('Tienda');
//Galeria
Route::view('/Nosotros','About')-> name('Nosotros');
//Nosotros
Route::view('/Contacto','Contact')-> name('Contacto');
//Log in
Route::view('/Iniciar Sesión','Login')-> name('Iniciar Sesión');
//Sucursales
Route::view('/Sucursales','Sucursales')-> name('Sucursales');
//Tabla Clientes
Route::view('/Clientes','Clientes')-> name('Clientes');
//Ticket
Route::view('/Ticket','Ticket')-> name('Ticket');
