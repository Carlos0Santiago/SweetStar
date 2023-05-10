<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function UsuerAdd()
    {
    //   $auth = Auth::id();
    //   if ($auth != null) {
    //     # code...
    //     $usuario = usuario::find(Auth::id());
    //     $personal = Personal::toBase()->where('idPersonal', $usuario->idPersonal)->first();
    //     $permisos = DB::select('exec SP_permisos @idUsuario = ?', [$usuario->idUsuario]);
        // return view('usuarios/usuarioRegistro', compact('personal', 'permisos'));
        return view('auth/register');
    //   } else {
    //     # code...
    //     return redirect('/');
    //   }
    }


    public function UserCreate(Request $request)
    {
        usuario::create([
            'usuario' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_rol' => 3,
            // 'idUsuarioAlta' => Auth::id(),
            // 'fechaEliminacion' => Carbon::now(),
        ]);
        return redirect('/');
    }
}
