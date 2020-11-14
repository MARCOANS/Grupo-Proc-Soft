<?php

namespace App\Http\Controllers\Cliente;

use App\DetallePedido;
use App\Http\Controllers\Controller;
use App\Pedido;
use Cart;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    public function getAll()
    {

        $pedidos = new Pedido;

        $output = array('data' => array());
        $i      = 1;
        foreach ($pedidos->userPedidos()->sortBy('ped_fcreacion') as $pedido) {

            $actionButton = '
             <div class="">
                    <a class="text-blue"  href="' . route("Cliente.Pedido.Show", ["pedido" => $pedido->id_pedido]) . '" >
                    <i class="ace-icon fa fa-search-plus bigger-130" style="font-size: 20px;"></i>
                    </a>
            </div>';

            $output['data'][] = array(

                'Pedido '.$i,
                $pedido->lugarentrega,
                $pedido->ped_fcreacion,
                $pedido->estado,
                $actionButton,

            );

            $i++;
        }

        return response()->json($output);
    }

    public function index()
    {
        return view('cliente.pedido.index');
    }

    public function store(Request $request)
    {

        $cart                  = Cart::getContent();
        $pedido                = new Pedido;
        $pedido->ped_fcreacion = now();
        $pedido->id_cliente    = auth()->user()->cliente->id_cliente;
        $pedido->lugarentrega  = $request->lugarentrega;
        $pedido->estado        = 'Generado';
        $pedido->save();

        foreach ($cart as $item) {

            $detalle               = new DetallePedido;
            $detalle->det_cantidad = $item->quantity;
            $detalle->det_subtotal = $item->quantity * $item->price;
            $detalle->id_producto  = $item->id;
            $detalle->id_pedido    = $pedido->id_pedido;
            $detalle->save();

        }

        Cart::clear();

        return redirect()->route('Cliente.Pedido.Show', ['pedido' => $pedido]);

    }

    public function show(Pedido $pedido)
    {
        return view('cliente.pedido.show', ['pedido' => $pedido]);
    }
}
