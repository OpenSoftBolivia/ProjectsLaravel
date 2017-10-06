<?php

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
    return view('auth/login');
})->name('login');

Route::get('/pasoproduccion', function () {
    return view('pasoproduccion');
})->name('pasoproduccion');


Route::post('/listaDatos', 'datosFormularioController@btnConsulta');
/*Route::post('/listadatos', function () {
    echo "prueba eddy";
});*/
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function() {
    return view('home');
})->name('home');