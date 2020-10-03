<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Usuario;
use DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function getAll()
    {

        $usuarios = Usuario::All();

        $output = array('data' => array());
        foreach ($usuarios as $usuario) {

            $actionButton = '
             <div class="">
                    <a class="text-blue"  href="' . route("Admin.Usuario.Show", ["usuario" => $usuario->id_usuario]) . '" >
                    <i class="ace-icon fa fa-search-plus bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-success" href="' . route("Admin.Usuario.Edit", ["usuario" => $usuario->id_usuario]) . '" >
                    <i class="fa fa-pen bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-danger" data-target="#modal-destroy" href="" data-toggle="modal"  onclick="deleteS(' . "'" . route('Admin.Usuario.Destroy', ['usuario' => $usuario->id_usuario]) . "'" . ')">
                    <i class="fa fa-trash bigger-130" style="font-size: 20px;"></i>
                    </a>
            </div>';

            $output['data'][] = array(

                $usuario->usu_nombres,
                $usuario->usu_appaterno,
                $usuario->usu_apmaterno,
                $usuario->usu_correo,
                $usuario->usu_telefono,
                /*    '
                <a class="venobox" href="' . url(Storage::url('sistem/photos/' . $datosusuario['foto'])) . '"><img class="thumbnail border border-secondary rounded-circle" height="40" width="40" src="' . url(Storage::url('sistem/photos/' . $datosusuario['foto'])) . '"/></a>',*/
                //$this->usuario->estadoacademico($usuario->estadoacademico),
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

        $data = DB::select('call SP_A_T_Usuario (?, ?,?,?,?,?,?)', $data);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }



}
