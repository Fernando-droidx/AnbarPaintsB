<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Domicilio;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        // Cargar los pedidos con las relaciones 'cliente', 'producto' y 'domicilio'
        $pedidos = Pedido::with(['cliente', 'producto', 'domicilio'])->get();
        
        // Pasar los pedidos a la vista
        return view('admin.pedidos.index', compact('pedidos'));
    }

}