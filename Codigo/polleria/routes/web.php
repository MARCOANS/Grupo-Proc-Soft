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

Route::get('/', function () {
    return view('index');
})->name('Site.Index');

Route::get('home', function () {
    return redirect('/admin/usuario');
});

Route::get('/login', 'Auth\LoginController@login')->name('login')->middleware('guest');
Route::post('login', 'Auth\LoginController@authenticate')->name('Authenticate');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => 'auth'], function () {

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'Admin.'], function () {

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

    Route::group(['prefix' => 'user'], function () {
        Route::get('get', 'UsuarioController@getAll')->name('User.GetAll');
        Route::post('store2', 'ProductoController@store2')->name('Producto.Store2');
        Route::get('searchliveProducto', 'ProductoController@SearchLive')->name('Producto.Search');
        Route::post('checkProducto', 'ProductoController@Check')->name('Producto.Check');

    });
    Route::resource('usuario', 'UsuarioController',
        ['names' => [
            'index'   => 'Usuario.Index',
            'create'  => 'Usuario.Create',
            'store'   => 'Usuario.Store',
            'show'    => 'Usuario.Show',
            'edit'    => 'Usuario.Edit',
            'update'  => 'Usuario.Update',
            'destroy' => 'Usuario.Destroy',
        ]]);

});

});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
