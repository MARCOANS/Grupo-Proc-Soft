<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {return view('index');})->name('Site.Index');

Route::get('home', function () {return redirect('/portal');});

Route::resource('usuario', 'Admin\ClienteController', ['names' => ['store' => 'Usuario.Store']]);

Route::get('/login', 'Auth\LoginController@login')->name('login')->middleware('guest');
Route::post('login', 'Auth\LoginController@authenticate')->name('Authenticate');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('ver/{name}/{categoria}', 'Admin\CatalogoController@productos')->name('Site.Catalogo');

Route::group(['middleware' => 'auth'], function () {

    Route::get('portal', function () {return view('portal');});

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'Admin.'], function () {

        require (__DIR__ . '/routes/admin.php');

    });

    //========================================================================

    Route::post('cart-add', 'CartController@add')->name('Cart.Add');
    Route::get('view-cart', 'CartController@cart')->name('Cart.Show');
    Route::post('cart-clear', 'CartController@clear')->name('Cart.Clear');
    Route::post('cart-remove-item', 'CartController@removeitem')->name('Cart.RemoveItem');

    Route::group(['prefix' => 'cliente', 'namespace' => 'Cliente', 'as' => 'Cliente.'], function () {
        Route::get('paypal/pay', 'PaymentController@payWithPayPal')->name('Pay');
        Route::get('paypal/status', 'PaymentController@payPalStatus')->name('PayStatus');
        Route::group(['prefix' => 'pedido'], function () {
            Route::get('get', 'PedidoController@getAll')->name('Pedido.GetAll');
            Route::post('update-pago/{pedido}', 'PedidoController@updatePago')->name('Pedido.UpdatePago');
        });
        Route::resource('pedido', 'PedidoController',
            ['names' => [
                'index'   => 'Pedido.Index',
                'create'  => 'Pedido.Create',
                'store'   => 'Pedido.Store',
                'show'    => 'Pedido.Show',
                'edit'    => 'Pedido.Edit',
                'update'  => 'Pedido.Update',
                'destroy' => 'Pedido.Destroy',
            ]]);

    });

});
