<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getAll()
    {

        $admins = new Admin;

        $output = array('data' => array());
        foreach ($admins->listar() as $admin) {

            //generar los botones para editar  y eliminar
            $actionButton = '
            <div class="">
                    <a class="text-success" href="' . route("Admin.Admin.Edit", ["administrador" => $admin->id_admin]) . '" >
                    <i class="fa fa-pen bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-danger" data-target="#modal-destroy" href="" data-toggle="modal"  onclick="deleteUsuario(' . "'" . route('Admin.Admin.Destroy', ['administrador' => $admin->id_admin]) . "'" . ')">
                    <i class="fa fa-trash bigger-130" style="font-size: 20px;"></i>
                    </a>
            </div>';

            $output['data'][] = array(

                $admin->datosUsuario->usu_nombres,
                $admin->datosUsuario->usu_appaterno,
                $admin->datosUsuario->usu_apmaterno,
                $admin->datosUsuario->usu_correo,
                $admin->datosUsuario->usu_telefono,
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
        //retornar vista para crear
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

        $usuario = new Usuario;

        //Verificar si existen usuarios  con email ó username duplicado
        $validaMail     = $usuario->countMail($request->email);
        $validaUserName = $usuario->countUserName($request->usuario);

        //Mensaje de error cuando el mail es duplicado
        if ($validaMail > 0) {
            return response()->json(['message' => 'Direccion de corrreo duplicada'], 422);
        }
        //Mensaje de error cuando el nombre de usuario es duplicado
        if ($validaUserName > 0) {
            return response()->json(['message' => 'El nombre de usuario ya existe'], 422);
        }

        //Completar  el array con los campos del formulario
        $data = [
            $request->nombre,
            $request->paterno,
            $request->materno,
            $request->email,
            $request->usuario,
            $request->password,
            $request->telefono,
        ];

        //Llamado al metodo guardar del modelo usuario
        $usuarioRegistrado = $usuario->guardar($data);

        //Completar datos para el usuario administrado y llamado al metodo para guardar
        $admin             = new Admin;
        $admin->id_usuario = $usuarioRegistrado->id_usuario;
        $admin->estado     = 'Activo';
        $admin->save();

        //Enviar mensaje  de exito
        return response()->json(['message' => 'Registro creado']);
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $administrador)
    {
        //retornar vista para editar
        return view('admin.usuario.edit', ['admin' => $administrador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Admin $administrador)
    {

        //asignar  los datos  del formulario y llamar  al metodo para actualizar los datos
        $user=Usuario::find($administrador->id_usuario);
        $user->update($request->all());

        //Enviar mensaje
        return response()->json(['message' => 'Registro actualizado correctamente']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $administrador)
    {
        //Asignar el estado de elimado "Inactivo" y llamado al metodo para guardar los cambios

        $administrador->estado = 'Inactivo';
        $administrador->save();

        //Enviar mensaje
        return response()->json(['message' => 'Registro eliminado correctamente']);
    }

}
