<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Producto;

class CatalogoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productos($nombre, $categoria)
    {
        $productos = new Producto;
        return view('catalogo', ['productos' => $productos->catalogo($categoria)]);
    }

}
