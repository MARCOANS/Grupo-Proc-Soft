<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Http\Request;
use Storage;

class ProductoController extends Controller
{

    public function getAll()
    {

        $productos = new Producto;

        $output = array('data' => array());

        foreach ($productos->listar() as $producto) {

            $actionButton = '
             <div class="">
                    <a class="text-success" href="' . route("Admin.Producto.Edit", ["producto" => $producto->id_producto]) . '" >
                    <i class="fa fa-pen bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-danger" data-target="#modal-destroy" href="" data-toggle="modal"  onclick="deleteProducto(' . "'" . route('Admin.Producto.Destroy', ['producto' => $producto->id_producto]) . "'" . ')">
                    <i class="fa fa-trash bigger-130" style="font-size: 20px;"></i>
                    </a>
            </div>';

            $output['data'][] = array(

                $producto->prod_nombre,
                $producto->prod_descripcion,
                $producto->prod_precio,
                $producto->datosCategoria->cat_nombre,
                '<span><img width="70"  height ="60" src="' . url(Storage::url('sistem/photos/' . $producto->prod_imagen)) . '" alt="avatar"></span>',
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
            $img  = $request->file('imagen');
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

        $producto = new Producto;
        $producto->guardar($data);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('admin.producto.edit', ['producto' => $producto]);
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

        $producto->update($request->all());
        if ($request->hasFile('prod_imagen')) {
            $img  = $request->file('prod_imagen');
            $nomb = 'foto-producto-' . md5(uniqid(mt_rand())) . "." . $img->getClientOriginalExtension();
            \Storage::disk('fotografias')->put($nomb, \File::get($img));
            $rutaImg = $nomb;
            $producto->update(['prod_imagen' => $rutaImg]);

        }

        return response()->json(['message' => 'Registro actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->prod_deleted = 1;
        $producto->save();
        return response()->json(['message' => 'Registro eliminado correctamente']);
    }
}
