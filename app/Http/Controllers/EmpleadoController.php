<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Auth;
use App\Models\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index () {
    
        // Llamar al procedimiento almacenado
        $empleados = DB::select('SET NOCOUNT ON ; exec [SP_Productos] @Op =Empleados, @IdUsuario = ?',[Auth::id()]);
        $sucursales2 = DB::select('SET NOCOUNT ON ; exec [SP_Productos] @Op = Sucursales');

    // dump($stock);
    return view('Empleado/EmpleadoLista', compact('empleados','sucursales2'));            
}
public function eliminar($id)
{
    $empleados = Empleado::destroy($id);

    if ($empleados) {
        return redirect()->route('EmpleadoLista')->with('success', 'Empleado eliminado exitosamente');
    }

    return redirect()->route('EmpleadoLista')->with('error', 'No se pudo encontrar el empleado');
}

public function editar($id)
{
    // Obtener el empleado por su ID y pasar los datos a la vista de edición
    $empleado = Empleado::find($id);
    
    return view('empleado.editar', compact('empleado'));
}

public function actualizar(Request $request, $id)
{
    $empleado = Empleado::find($id_usuario);

    // Validar los datos del formulario de edición
    $request->validate([
        'usuario' => 'required',
        'Curp' => 'required',
        'RFC' => 'required',
        'Cargo' => 'required',
        'Telefono' => 'required',
        'nombre_sucursal' => 'required',
        // Agrega las reglas de validación para otros campos si es necesario
    ]);

    // Actualizar el empleado en la base de datos
    $empleado = Empleado::find($id);
    $empleado->usuario = $request->usuario;
    $empleado->Curp = $request->Curp;
    $empleado->RFC = $request->RFC;
    $empleado->Cargo = $request->Cargo;
    $empleado->Telefono = $request->Telefono;
    $empleado->nombre_sucursal = $request->nombre_sucursal;

    // Guardar los cambios
    $empleado->save();

    // Redireccionar a la lista de empleados o a una página de confirmación
    return redirect()->route('EmpleadoLista')->with('success', 'Empleado actualizado exitosamente.');
}

}

