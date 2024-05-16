<?php

namespace App\Http\Controllers;
use App\Models\Domicilio;
use App\Models\Pedido;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DomiciliosController extends Controller
{
    public function index()
    {
        $domicilios = Domicilio::with('pedido')->get();
        return view('admin.domicilios.index', compact('domicilios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos = Pedido::all(); // Obtén todos los pedidos

        return view('admin.domicilios.create', compact('pedidos')); // Pasa la variable $pedidos a la vista
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar la solicitud

        $domicilio = Domicilio::create($request->all());

        // Mostrar mensaje de éxito

        return redirect()->route('admin.domicilios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function show(Domicilio $domicilio)
    {
        return view('admin.domicilios.show', compact('domicilio'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function edit(Domicilio $domicilio)
    {
        return view('admin.domicilios.edit', compact('domicilio'));
    }
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domicilio $domicilio)
    {
        // Validar la solicitud

        $domicilio->update($request->all());

        // Mostrar mensaje de éxito

        return redirect()->route('admin.domicilios.show', $domicilio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domicilio $domicilio)
    {
        $domicilio->delete();

        // Mostrar mensaje de éxito

        return redirect()->route('admin.domicilios.index');
    }
}
