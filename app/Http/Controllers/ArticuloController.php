<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
  
    public function index () {
    
        // Llamar al procedimiento almacenado
        $total = DB::select('SET NOCOUNT ON ; exec [SP_Productos] @Op =ProductosTienda, @IdUsuario = ?',[Auth::id()]);
        $stock = DB::select('exec [SP_Productos] @Op =StockTiendas');

    // dump($stock);
    return view('Articulo/ArticuloLista', compact('total','stock'));            
}


}

