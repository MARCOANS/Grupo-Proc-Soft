<?php

namespace App;

use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table      = 'tbl_usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps    = false;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'usu_nombres',
        'usu_appaterno',
        'usu_apmaterno',
        'usu_correo',
        'usu_telefono',
        'usu_login',
        'usu_password',
    ];

    public function guardar(array $data)
    {
        DB::select('call SP_A_T_Usuario (?, ?,?,?,?,?,?)', $data);
    }

    public function listar()
    {
        return Usuario::All()->where('usu_deleted', '0');
    }

}
