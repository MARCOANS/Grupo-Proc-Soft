<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table      = 'tbl_admin';
    protected $primaryKey = 'id_admin';
    public $timestamps    = false;

    protected $fillable = [
        'id_usuario',
        'estado',
    ];

    public function listar()
    {
        return Admin::All()->where('estado', 'Activo');
    }

    public function datosUsuario()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }

}
