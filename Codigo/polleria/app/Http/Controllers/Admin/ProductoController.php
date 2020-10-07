<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Producto;
use DB;
use Illuminate\Http\Request;
use Storage;
class ProductoController extends Controller
{

    public function getAll()
    {

        $productos = Producto::All();

        $output = array('data' => array());

        foreach ($productos as $producto) {

            $actionButton = '
             <div class="">
                    <a class="text-blue"  href="' . route("Admin.Usuario.Show", ["usuario" => $producto->id_producto]) . '" >
                    <i class="ace-icon fa fa-search-plus bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-success" href="' . route("Admin.Usuario.Edit", ["usuario" => $producto->id_producto]) . '" >
                    <i class="fa fa-pen bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-danger" data-target="#modal-destroy" href="" data-toggle="modal"  onclick="deleteS(' . "'" . route('Admin.Usuario.Destroy', ['usuario' => $producto->id_producto]) . "'" . ')">
                    <i class="fa fa-trash bigger-130" style="font-size: 20px;"></i>
                    </a>
            </div>';

            $output['data'][] = array(

                $producto->prod_nombre,
                $producto->prod_descripcion,
                $producto->prod_precio,
                $producto->datosCategoria->cat_nombre,
               '<span><img width="70" src="' . url(Storage::url('sistem/photos/' . $producto->prod_imagen)) . '" alt="avatar"></span>',
                $actionButton,

            );
        }

        return response()->json($output);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.producto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rutaImg = '';
        if ($request->hasFile('imagen')) {
            $img = $request->file('imagen');

            $nomb = 'foto-producto-' . md5(uniqid(mt_rand())) . "." . $img->getClientOriginalExtension();

            \Storage::disk('fotografias')->put($nomb, \File::get($img));

            $rutaImg = $nomb;
        }

        $data = [
            $request->nombre,
            $request->descripcion,
            $request->precio,
            $request->categoria,
            $rutaImg,
        ];

        $data = DB::select('call SP_A_T_Producto (?, ?,?,?,?)', $data);
        return response()->json(['message' => 'Registro creado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
