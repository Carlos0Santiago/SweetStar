<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Auth\Passwords\CanResetPassword;

class usuario extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'Usuarios';
    protected $primaryKey = 'id_usuario';
    
    const CREATED_AT = 'fechaAlta';
    const UPDATED_AT = 'fechaUMod'; 

    protected $fillable = [ 
        'usuario',
        'password',
        'id_rol',
        'id_sucursal',
        'Cargo',
        'remember_token',
        'fechaAlta',
        'fechaUMod',
        'email',
        'idUsuarioAlta',
        'idUsuarioUMod'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName() {
        return 'idUsuario';
    }

    public function Personal() {
        return $this->hasOne(Personal::class, 'idPersonal','idPersonal');
    }

    public function articulos() {
        return $this->hasMany(Articulo::class, 'idUsuario', 'idUsuario');
    }

    // public function sendPasswordResetNotification($token) {
    //     $this->notify(new ResetPasswordNotification($token));
    // }

}



