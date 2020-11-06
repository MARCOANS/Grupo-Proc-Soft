<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   protected $table      = 'tbl_cliente';
    protected $primaryKey = 'id_cliente';
    public $timestamps    = false;


        protected $fillable = [
        'cli_estado',
        'id_usuario',
     
    ];
}
