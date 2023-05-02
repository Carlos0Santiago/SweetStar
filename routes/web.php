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
Route::get('/', function () {
    if(!Auth::check()) {
        return view('auth/login');
    } else {
        return redirect()->route('home');
    }

});
Auth::routes();


////////////////////////////////////////////////////BLOG-HOME////////////////////////////////////////////////////////
//Inicio
Route::view('/home','welcome')-> name('Home');
//Tienda
Route::view('/Tienda','Store')-> name('Tienda');
//Galeria
Route::view('/Nosotros','About')-> name('Nosotros');
//Nosotros
Route::view('/Contacto','Contact')-> name('Contacto');


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Articulos
// Route::view('/Articulo/Lista', 'Articulo.ArticuloLista')->name('ArticuloLista');
Route::get('/Articulo/Lista/data', 'App\Http\Controllers\ArticuloController@index')->name('ArticuloLista');



//Provedores
Route::view('/Provedores/Lista', 'Provedores.ProvedoresLista')->name('ListaProvedores');


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
