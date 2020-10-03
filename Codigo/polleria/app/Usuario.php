<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table      = 'tbl_usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps    = false;

}
