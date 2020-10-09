<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function getAll()
    {

        $usuarios = new Usuario;

        $output = array('data' => array());
        foreach ($usuarios->listar() as $usuario) {

            $actionButton = '
             <div class="">
                    <a class="text-blue"  href="' . route("Admin.Usuario.Show", ["usuario" => $usuario->id_usuario]) . '" >
                    <i class="ace-icon fa fa-search-plus bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-success" href="' . route("Admin.Usuario.Edit", ["usuario" => $usuario->id_usuario]) . '" >
                    <i class="fa fa-pen bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-danger" data-target="#modal-destroy" href="" data-toggle="modal"  onclick="deleteUsuario(' . "'" . route('Admin.Usuario.Destroy', ['usuario' => $usuario->id_usuario]) . "'" . ')">
                    <i class="fa fa-trash bigger-130" style="font-size: 20px;"></i>
                    </a>
            </div>';

            $output['data'][] = array(

                $usuario->usu_nombres,
                $usuario->usu_appaterno,
                $usuario->usu_apmaterno,
                $usuario->usu_correo,
                $usuario->usu_telefono,
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
        return view('admin.usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            $request->nombre,
            $request->paterno,
            $request->materno,
            $request->email,
            $request->usuario,
            $request->password,
            $request->telefono,
        ];

        $usuario = new Usuario;
        $usuario->guardar($data);
        return response()->json(['message' => 'Registro creado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('admin.usuario.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {

        $usuario->update($request->all());
        return response()->json(['message' => 'Registro actualizado correctamente']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->usu_deleted = 1;
        $usuario->save();

        return response()->json(['message' => 'Registro eliminado correctamente']);
    }

}
