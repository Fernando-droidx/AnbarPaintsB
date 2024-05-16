<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DomiciliosController;




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
    return view('auth.login');
});

Route::get('/QuienesSomos/indexQS', function () {
    return view('QuienesSomos.indexQS');
});

Route::get('/Privacidad/indexPri', function () {
    return view('Privacidad.indexPri');
});

Route::get('/Servicios/indexS', function () {
    return view('Servicios.indexS');
});

Route::get('/Galeria/index', function () {
    return view('Galeria.index');
});

Route::get('/admin', function () {
    return view('admin/Dashboard');
});


Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');


//Admin/productos
Route::get('/admin/productos', [ProductoController::class, 'index'])->name('admin.productos.index');
Route::get('/admin/productos/create', [ProductoController::class, 'create'])->name('admin.productos.create');
Route::post('/admin/productos', [ProductoController::class, 'store'])->name('admin.productos.store');
Route::get('/admin/productos/{id}', [ProductoController::class, 'show'])->name('admin.productos.show');
Route::get('/admin/productos/{id}/edit', [ProductoController::class, 'edit'])->name('admin.productos.edit');
Route::put('/admin/productos/{id}', [ProductoController::class, 'update'])->name('admin.productos.update');
Route::delete('/admin/productos/{id}', [ProductoController::class, 'destroy'])->name('admin.productos.destroy');
Route::put('/admin/productos/{producto}', [ProductoController::class, 'update'])->name('admin.productos.update');

//Admin/usuarios

Route::get('/admin/usuarios', [UserController::class, 'index'])->name('admin.usuarios.index');
Route::get('/admin/usuarios/create', [UserController::class, 'create'])->name('admin.usuarios.create');
Route::post('/admin/usuarios', [UserController::class, 'store'])->name('admin.usuarios.store');
Route::get('/admin/usuarios/{user}', [UserController::class, 'show'])->name('admin.usuarios.show');
Route::get('/admin/usuarios/{user}/edit', [UserController::class, 'edit'])->name('admin.usuarios.edit');
Route::put('/admin/usuarios/{user}', [UserController::class, 'update'])->name('admin.usuarios.update');
Route::delete('/admin/usuarios/{user}', [UserController::class, 'destroy'])->name('admin.usuarios.destroy');

//Admin/pedidos
Route::get('/admin/pedidos', [PedidoController::class, 'index'])->name('admin.pedidos.index');
Route::get('/admin/pedidos/create', [PedidoController::class, 'create'])->name('admin.pedidos.create');
Route::post('/admin/pedidos', [PedidoController::class, 'store'])->name('admin.pedidos.store');
Route::get('/admin/pedidos/{pedido}', [PedidoController::class, 'show'])->name('admin.pedidos.show');
Route::get('/admin/pedidos/{pedido}/edit', [PedidoController::class, 'edit'])->name('admin.pedidos.edit');
Route::put('/admin/pedidos/{pedido}', [PedidoController::class, 'update'])->name('admin.pedidos.update');
Route::delete('/admin/pedidos/{pedido}', [PedidoController::class, 'destroy'])->name('admin.pedidos.destroy');

//Admin/clientes


Route::get('/admin/clientes', [ClienteController::class, 'index'])->name('admin.clientes.index');
Route::get('/admin/clientes/create', [ClienteController::class, 'create'])->name('admin.clientes.create');
Route::post('/admin/clientes', [ClienteController::class, 'store'])->name('admin.clientes.store');
Route::get('/admin/clientes/{cliente}', [ClienteController::class, 'show'])->name('admin.clientes.show');
Route::get('/admin/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('admin.clientes.edit');
Route::put('/admin/clientes/{cliente}', [ClienteController::class, 'update'])->name('admin.clientes.update');
Route::delete('/admin/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('admin.clientes.destroy');

//Admin/direcciones


Route::get('/admin/domicilios/create', [DomiciliosController::class, 'create'])->name('admin.domicilios.create');
Route::post('/admin/domicilios', [DomiciliosController::class, 'store'])->name('admin.domicilios.store');
Route::get('/admin/domicilios', [DomiciliosController::class, 'index'])->name('admin.domicilios.index');
Route::get('/admin/domicilios/{domicilio}', [DomiciliosController::class, 'show'])->name('admin.domicilios.show');
Route::get('/admin/domicilios/{domicilio}/edit', [DomiciliosController::class, 'edit'])->name('admin.domicilios.edit');
Route::put('/admin/domicilios/{domicilio}', [DomiciliosController::class, 'update'])->name('admin.domicilios.update');
Route::delete('/admin/domicilios/{domicilio}', [DomiciliosController::class, 'destroy'])->name('admin.domicilios.destroy');


//parte del logeo 


// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

    


