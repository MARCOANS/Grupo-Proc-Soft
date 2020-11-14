<?php
Route::group(['prefix' => 'producto'], function () {
    Route::get('get', 'ProductoController@getAll')->name('Producto.GetAll');
    Route::post('store2', 'ProductoController@store2')->name('Producto.Store2');
    Route::get('searchliveProducto', 'ProductoController@SearchLive')->name('Producto.Search');

    Route::post('checkProducto', 'ProductoController@Check')->name('Producto.Check');

});

Route::resource('producto', 'ProductoController',
    ['names' => [
        'index'   => 'Producto.Index',
        'create'  => 'Producto.Create',
        'store'   => 'Producto.Store',
        'show'    => 'Producto.Show',
        'edit'    => 'Producto.Edit',
        'update'  => 'Producto.Update',
        'destroy' => 'Producto.Destroy',
    ]]);

Route::group(['prefix' => 'administrador'], function () {
    Route::get('get', 'AdminController@getAll')->name('Admin.GetAll');
});
Route::resource('administrador', 'AdminController',
    ['names' => [
        'index'   => 'Admin.Index',
        'create'  => 'Admin.Create',
        'store'   => 'Admin.Store',
        'show'    => 'Admin.Show',
        'edit'    => 'Admin.Edit',
        'update'  => 'Admin.Update',
        'destroy' => 'Admin.Destroy',
    ]]);

Route::group(['prefix' => 'cliente'], function () {
    Route::get('get', 'ClienteController@getAll')->name('Cliente.GetAll');
});
Route::resource('cliente', 'ClienteController',
    ['names' => [
        'index'   => 'Cliente.Index',
        'create'  => 'Cliente.Create',
        'store'   => 'Cliente.Store',
        'show'    => 'Cliente.Show',
        'edit'    => 'Cliente.Edit',
        'update'  => 'Cliente.Update',
        'destroy' => 'Cliente.Destroy',
    ]]);

Route::group(['prefix' => 'pedido'], function () {
    Route::get('get', 'PedidoController@getAll')->name('Pedido.GetAll');

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
