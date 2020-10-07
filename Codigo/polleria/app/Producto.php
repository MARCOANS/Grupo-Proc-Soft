<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
     protected $table      = 'tbl_producto';
    protected $primaryKey = 'id_producto';
    public $timestamps    = false;

    public function datosCategoria()
    {
    	return $this->belongsTo('App\Categoria', 'id_categoria');
    }
}
