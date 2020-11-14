<?php

namespace App\Http\Controllers\Admin;

use App\Cliente;
use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function getAll()
    {

        $clientes = new Cliente;

        $output = array('data' => array());
        foreach ($clientes->listar() as $cliente) {

            //generar los botones para editar  y eliminar
            $actionButton = '
            <div class="">
                    <a class="text-success" href="' . route("Admin.Cliente.Edit", ["cliente" => $cliente->id_cliente]) . '" >
                    <i class="fa fa-pen bigger-130" style="font-size: 20px;"></i>
                    </a>
                    <a class="text-danger" data-target="#modal-destroy" href="" data-toggle="modal"  onclick="deleteUsuario(' . "'" . route('Admin.Cliente.Destroy', ['cliente' => $cliente->id_cliente]) . "'" . ')">
                    <i class="fa fa-trash bigger-130" style="font-size: 20px;"></i>
                    </a>
            </div>';

            $output['data'][] = array(

                $cliente->datosUsuario->usu_nombres,
                $cliente->datosUsuario->usu_appaterno,
                $cliente->datosUsuario->usu_apmaterno,
                $cliente->datosUsuario->usu_correo,
                $cliente->datosUsuario->usu_telefono,
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
        return view('admin.cliente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retornar vista para crear
        return view('admin.cliente.create');
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

        //Completar datos para el usuario cliente y llamado al metodo para guardar
        $cliente             = new Cliente;
        $cliente->id_usuario = $usuarioRegistrado->id_usuario;
        $cliente->cli_estado     = 'Activo';
        $cliente->save();

        //Enviar mensaje  de exito
        return response()->json(['message' => 'Registro creado']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //retornar vista para editar
        return view('admin.cliente.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {

        //asignar  los datos  del formulario y llamar  al metodo para actualizar los datos
        $user = Usuario::find($cliente->id_usuario);
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
    public function destroy(Cliente $cliente)
    {
        //Asignar el estado de elimado "Inactivo" y llamado al metodo para guardar los cambios

        $cliente->cli_estado = 'Inactivo';
        $cliente->save();

        //Enviar mensaje
        return response()->json(['message' => 'Registro eliminado correctamente']);
    }

}
