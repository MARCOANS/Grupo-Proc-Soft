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

Route::get('login', function () {
    return view('login');
})->name('Site.Login');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'Admin.'], function () {

    Route::group(['prefix' => 'producto'], function () {
    Route::get('get', 'AlumnoController@getAll')->name('Alumno.Retrieve');
    Route::post('store2', 'AlumnoController@store2')->name('Alumno.Store2');
    Route::get('searchliveAlumno', 'AlumnoController@SearchLive')->name('Alumno.Search');

    Route::post('checkalumno', 'AlumnoController@Check')->name('Alumno.Check');

});

Route::resource('producto', 'ProductoController',
    ['names' => [
        'index'   => 'Alumno.Index',
        'create'  => 'Alumno.Create',
        'store'   => 'Alumno.Store',
        'show'    => 'Alumno.Show',
        'edit'    => 'Alumno.Edit',
        'update'  => 'Alumno.Update',
        'destroy' => 'Alumno.Destroy',
    ]]);

});
