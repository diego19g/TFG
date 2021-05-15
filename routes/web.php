<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::view('/', 'home')->name('home');
Route::view('login', 'login')->name('login');
Route::view('carta', 'carta')->name('carta');
Route::view('carta_cliente', 'cliente.carta_cliente')->name('carta_cliente');
Route::view('pedidos_cliente', 'cliente.pedidos_cliente')->name('pedidos_cliente');
Route::view('pedido_actual', 'cliente.compra_actual')->name('compra');

Route::post('acceso',[LoginController::class,'ComprobarLogin'])->name('acceso');
Route::post('registro',[RegisterController::class,'RegistrarUsuario'])->name('registro');
Route::get('home_cliente',[LoginController::class,'CogerNombre'])->name('home_cliente');
Route::get('cuenta', [DatosController::class,'index'])->name('cuenta');



/*Route::get('/', function () {
    return view('welcome');
});*/
