<?php

namespace App\Http\Controllers;

use App\Producto;
use Cart;
use Illuminate\Http\Request;
use Storage;

class CartController extends Controller
{

    public function add(Request $request)
    {

        $producto = Producto::find($request->id_producto);

        Cart::add(array(

            'id'              => $producto->id_producto,
            'name'            => $producto->prod_nombre,
            'price'           => $producto->prod_precio,
            'quantity'        => 1,
            'attributes'      => array(
                "urlfoto"     => url(Storage::url('sistem/photos/' . $producto->prod_imagen)),
                "descripcion" => $producto->prod_descripcion,
            ),
            'associatedModel' => $producto,
        )
        );
        return back()->withErrors(['success' => "$producto->prod_nombre ¡se ha agregado con éxito al carrito!"]);

    }

    public function cart()
    {

        return view('cart');
    }

    public function removeitem(Request $request)
    {
        //$producto = Producto::where('id', $request->id)->firstOrFail();
        Cart::remove([
            'id' => $request->id,
        ]);
        return back()->with('success', "Producto eliminado con éxito de su carrito.");
    }

    public function clear()
    {
        Cart::clear();
        return back()->with('success', "The shopping cart has successfully beed added to the shopping cart!");
    }

}
