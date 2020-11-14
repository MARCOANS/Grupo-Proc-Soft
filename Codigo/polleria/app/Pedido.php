<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table      = 'tbl_pedido';
    protected $primaryKey = 'id_pedido';
    public $timestamps    = false;

    protected $fillable = [
        'ped_fcreacion',
        'id_cliente',
        'lugarentrega',
        'estado',

    ];

    public function detalle()
    {
        return $this->hasMany('App\DetallePedido', 'id_pedido');
    }

    public function datosCliente()
    {
        return $this->belongsTo('App\Cliente', 'id_cliente');
    }

    public function userPedidos()
    {
        return Pedido::All()->where('id_cliente', auth()->user()->cliente->id_cliente);
    }

    public function listar()
    {
        return Pedido::All();
    }
}
