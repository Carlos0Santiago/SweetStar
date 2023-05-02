<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ArticuloController extends Controller
{
  
    public function index () {
    
        // Llamar al procedimiento almacenado
        $productos = DB::select('exec [SP_Productos] @Op =ProductosTienda');
    // dump($productos);
    return view('Articulo/ArticuloLista', compact('productos'));            
}
    

}

