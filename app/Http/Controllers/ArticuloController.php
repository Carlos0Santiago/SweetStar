<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ArticuloController extends Controller
{
  
    public function index () {
    
        // Llamar al procedimiento almacenado
        $total = DB::select('exec [SP_Productos] @Op =ProductosTienda');
        $stock = DB::select('exec [SP_Productos] @Op =StockTiendas');

    // dump($stock);
    return view('Articulo/ArticuloLista', compact('total','stock'));            
}


}

