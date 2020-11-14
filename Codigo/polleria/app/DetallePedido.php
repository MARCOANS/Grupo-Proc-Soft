<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $table      = 'tbl_detalle_pedido';
    protected $primaryKey = 'id_detalle_pedido';
    public $timestamps    = false;

    protected $fillable = [
        'det_cantidad',
        'det_subtotal',
        'id_producto',
        'id_pedido',

    ];

    public function datosProducto()
    {
        return $this->belongsTo('App\Producto', 'id_producto');
    }
}
