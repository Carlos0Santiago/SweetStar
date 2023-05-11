<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
class ProveedorController extends Controller
{
  
    public function index () {
    
        // Llamar al procedimiento almacenado
        $proveedor = DB::select('SET NOCOUNT ON ; exec [SP_Productos] @Op =Provedores',[Auth::id()]);


    // dump($stock);
    return view('Proveedor/ProveedorLista', compact('proveedor'));            
}


}

