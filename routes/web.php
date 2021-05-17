<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\RestauranteController;

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
Route::view('pedido_actual', 'cliente.compra_actual')->name('compra');

Route::post('acceso',[LoginController::class,'ComprobarLogin'])->name('acceso');
Route::post('registro',[RegisterController::class,'RegistrarUsuario'])->name('registro');
Route::get('cerrar_sesion', [CartController::class,'CerrarSesion'])->name('cerrar_sesion');
Route::get('home_cliente',[LoginController::class,'CogerNombre'])->name('home_cliente');
Route::get('cuenta', [DatosController::class,'index'])->name('cuenta');
Route::put('modificar_datos', [DatosController::class,'ModificarDatos'])->name('modificar_datos');


//rutas del carrito
Route::get('/carta_cliente', [CartController::class,'shop'])->name('shop');
Route::get('/cart', [CartController::class,'cart'])->name('cart.index');
Route::post('/add', [CartController::class,'add'])->name('cart.store');
Route::post('/update', [CartController::class,'update'])->name('cart.update');
Route::post('/remove', [CartController::class,'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class,'clear'])->name('cart.clear');

//rutas pedidos
Route::get('/guardar_pedido', [CartController::class,'GuardarPedido'])->name('guardar_pedido');
Route::get('/mostrar_pedidos', [PedidosController::class,'MostrarPedidos'])->name('mostrar_pedidos');
Route::get('total_pedidos', [PedidosController::class,'TotalPedidos'])->name('total_pedidos');

//rutas restaurante
Route::view('home_restaurante', 'restaurante.home_restaurante')->name('home_restaurante');
Route::get('pedidos_restaurante', [RestauranteController::class,'PedidosRestaurante'])->name('pedidos_restaurante');
Route::get('ultimo_pedido', [RestauranteController::class,'UltimoPedido'])->name('ultimo_pedido');




/*Route::get('/', function () {
    return view('welcome');
});*/
