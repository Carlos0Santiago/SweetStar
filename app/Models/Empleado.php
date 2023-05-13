<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'Usuarios';
    protected $primaryKey = 'id_usuario';
    // Otros atributos y configuraciones de acuerdo a tu tabla
    protected $fillable = [
        'id_usuario',
        'usuario',
        'passsword',
        'id_rol',
        'id_sucursal',
        'Cargo',
        'remember_token',
        'fechaAlta',
        'fechaUMod',
        'email',
        'idUsuarioAlta',
        'idUsuarioUMod',
        'Curp',
        'RFC',
        'Telefono',

    ];
}