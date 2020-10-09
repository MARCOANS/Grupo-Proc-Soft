<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $table      = 'tbl_producto';
    protected $primaryKey = 'id_producto';
    public $timestamps    = false;

    protected $fillable = [
        'prod_nombre',
        'prod_descripcion',
        'prod_precio',
        'id_categoria',
        'prod_imagen',

    ];

    public function listar()
    {
        return Producto::All()->where('prod_deleted', '0');
    }

    public function guardar(array $data)
    {
        DB::select('call SP_A_T_Producto (?, ?,?,?,?)', $data);
    }
    public function datosCategoria()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria');
    }

    public function catalogo($categoria)
    {
        return Producto::where(['id_categoria' => $categoria, 'prod_deleted' => '0'])->get();
    }
}
