<?php

namespace App\Http\Controllers\Admin;

use App\DetallePedido;
use App\Http\Controllers\Controller;
use App\Pedido;
use Cart;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    private $estados = array("Generado", "Aceptado", "Preparando", "Transportando", "Entregado");

    public function getAll()
    {

        $pedidos = new Pedido;

        $output = array('data' => array());
        $i      = 1;
        foreach ($pedidos->listar()->sortBy('ped_fcreacion') as $pedido) {

            $actionButton = '
             <div class="">
                    <a class="text-blue"  href="' . route("Admin.Pedido.Show", ["pedido" => $pedido->id_pedido]) . '" >
                    <i class="ace-icon fa fa-search-plus bigger-130" style="font-size: 20px;"></i>
                    </a>
            </div>';

            $opt_estado = '';
            foreach ($this->estados as $estado) {
                if ($estado == $pedido->estado) {
                    $opt_estado .= '<option selected="selected"  value=' . $estado . '>' . $estado . '</option>';
                } else {
                    $opt_estado .= '<option value=' . $estado . '>' . $estado . '</option>';
                }
            }

            $input = '<select class="form-control  basic"
            onchange="updateEstado(' . "'" . route('Admin.Pedido.Update', ['pedido' => $pedido->id_pedido]) . "'" . ',$(this).val());">
            ' . $opt_estado . '
            </select>
            ';

            $output['data'][] = array(

                'Pedido ' . $i,
                $pedido->datosCliente->datosUsuario->usu_appaterno . ' ' . $pedido->datosCliente->datosUsuario->usu_apmaterno . ' ' . $pedido->datosCliente->datosUsuario->usu_nombres,
                $pedido->lugarentrega,
                $pedido->ped_fcreacion,
                $this->labelEstado($pedido->estado),
                $this->labelPago($pedido->estado_pago),
                $input,
                $actionButton,

            );

            $i++;
        }

        return response()->json($output);
    }

    public function index()
    {
        return view('admin.pedido.index');
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
        return view('admin.pedido.show', ['pedido' => $pedido]);
    }

    public function update(Request $request, Pedido $pedido)
    {

        $pedido->update($request->all());
        return response()->json(['message' => 'Registro actualizado correctamente']);

    }

    public function labelEstado($value)
    {

        $label = '';
        switch ($value) {
            case 'Generado':
                $label = '<span class="badge badge-danger">' . $value . '</span>';
                break;
            case 'Aceptado':
                $label = '<span class="badge badge-warning">' . $value . '</span>';
                break;
            case 'Preparando':
                $label = '<span class="badge badge-dark">' . $value . '</span>';
                break;
            case 'Transportando':
                $label = '<span class="badge badge-info">' . $value . '</span>';
                break;
            case 'Entregado':
                $label = '<span class="badge badge-success">' . $value . '</span>';
                break;
        }

        return $label;
    }

    public function labelPago($value)
    {
        
        $label = '';
        switch ($value) {
            case 'Pagado':
                $label = '<span class="badge badge-success">' . $value . '</span>';
                break;
            default:
                $label = '<span class="badge badge-danger">Pendiente</span>';
                break;
        }

        return $label;
    }
}
