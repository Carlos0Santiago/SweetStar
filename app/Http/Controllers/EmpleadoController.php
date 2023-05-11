<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index () {
    
        // Llamar al procedimiento almacenado
        $empleados = DB::select('SET NOCOUNT ON ; exec [SP_Productos] @Op =Empleados, @IdUsuario = ?',[Auth::id()]);

    // dump($stock);
    return view('Empleado/EmpleadoLista', compact('empleados'));            
}


}

