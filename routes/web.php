<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/Login', function () {
    if(!Auth::check()) {
        return view('auth/login');
    } else {
        return redirect()->route('/home');
    }

});
Auth::routes();


////////////////////////////////////////////////////BLOG-HOME////////////////////////////////////////////////////////
//Inicio
Route::view('/','welcome')-> name('welcome');
Route::view('/Welcome','home')-> name('Home');
//Tienda
Route::view('/Tienda','Store')-> name('Tienda');
//Galeria
Route::view('/Nosotros','About')-> name('Nosotros');
//Nosotros
Route::view('/Contacto','Contact')-> name('Contacto');


Route::get('/usuario/Add', 'App\Http\Controllers\UsuarioController@UsuerAdd')->name('usuarioRegistro');
Route::post('/usuario/Add', 'App\Http\Controllers\UsuarioController@UserCreate')->name('usuarioRegistro');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Articulos
Route::get('/Articulo/Lista', 'App\Http\Controllers\ArticuloController@index')->name('ArticuloLista');
//Cliente
Route::get('/Cliente/Lista', 'App\Http\Controllers\ClienteController@index')->name('ClienteLista');
//Empleado
Route::get('/Empleado/Lista', 'App\Http\Controllers\EmpleadoController@index')->name('EmpleadoLista');
//Provedores
Route::get('/Proveedor/Lista', 'App\Http\Controllers\ProveedorController@index')->name('ProveedorLista');


//examples
Route::get('/Dictamen/lista', 'DictamenController@index')->name('DictamenLista');
Route::get('/Dictamen/crear', 'DictamenController@create')->name('DictamenCrear');
Route::post('/Dictamen/guardar', 'DictamenController@store')->name('DictamenGuardar');
Route::get('/Dictamen/editar/{idDictamen}', 'DictamenController@edit')->name('DictamenEditar');
Route::post('/Dictamen/actualizar/{idDictamen}', 'DictamenController@update')->name('DictamenActualizar');
Route::delete('/Dictamen/eliminar/{Dictamen}', 'DictamenController@destroy')->name('DictamenEliminar');
Route::get('/Dictamen/Articulos', 'DictamenController@Articulos')->name('DictamenArticulos');
Route::post('/Dictamen/archivar/{Dictamen}', 'DictamenController@archivar')->name('DictamenArchivar');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
