<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
 
    public function index () {
    
        // Llamar al procedimiento almacenado
        $cliente = DB::select('SET NOCOUNT ON ; exec [SP_Productos] @Op =Clientes',[Auth::id()]);

    return view('Cliente/ClienteLista', compact('cliente'));            
}


}

