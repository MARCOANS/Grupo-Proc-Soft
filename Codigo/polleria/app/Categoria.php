<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Categoria extends Authenticatable
{
    protected $table      = 'tbl_categoria';
    protected $primaryKey = 'id_categoria';
    public $timestamps    = false;

}
