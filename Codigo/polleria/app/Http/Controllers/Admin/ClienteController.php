<?php

namespace App\Http\Controllers\Admin;

use App\Cliente;
use App\Http\Controllers\Controller;
use App\Usuario;
use Exception;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request)
    {

        $countUsu = Usuario::where(['usu_correo' => $request->email])
            ->orWhere(['usu_login' => $request->usuario])
            ->count();

        if ($countUsu > 0) {

            //return response()->json(['message' => 'El usuario ya existe'], 422);
            $user = Usuario::where(['usu_correo' => $request->email, 'usu_login' => $request->usuario])->first();

            if ($user) {
            	try {
                $cliente             = new Cliente;
                $cliente->id_usuario = $user->id_usuario;
                $cliente->cli_estado = 'Activo';
                $cliente->save();
                return response()->json(['message' => 'Cliente registrado correctamente']);
            } catch (Exception $e) {
                return response()->json(['message' => 'El cliente ya se encuentra registrado' ],422);
            }
            }
            

        } else {

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
            $user                = Usuario::where(['usu_correo' => $request->email, 'usu_login' => $request->usuario])->first();
            $cliente             = new Cliente;
            $cliente->id_usuario = $user->id_usuario;
            $cliente->cli_estado = 'Activo';
            $cliente->save();
        }

       
        return response()->json(['message' => 'Registro creado']);
    }
}
