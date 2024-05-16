<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductoController extends Controller
{
     // Método para mostrar la lista de productos
     public function index()
     {
         $productos = Producto::all();
         return view('admin.productos.index', compact('productos'));
     }
 
     // Método para mostrar el formulario de creación de un nuevo producto
     public function create()
     {
         return view('admin.productos.create');
     }
 
     // Método para almacenar un nuevo producto creado
     public function store(Request $request)
{
    // Validar los datos del formulario, incluida la imagen
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric|min:0',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar la imagen
    ]);

    // Obtener el nombre de la imagen y moverla al directorio de destino
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images/productos'), $imageName);

    // Crear un nuevo objeto Producto y asignar los valores del formulario, incluida la ruta de la imagen
    $producto = new Producto();
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->precio = $request->precio;
    $producto->image = 'images/productos/' . $imageName; // Guardar la ruta de la imagen en la base de datos

    // Guardar el nuevo producto en la base de datos
    $producto->save();

    // Redirigir a la página de la lista de productos con un mensaje de éxito
    return redirect()->route('admin.productos.index')->with('success', 'Producto creado correctamente');
}

 
     // Método para mostrar los detalles de un producto
     public function show($id)
     {
         $producto = Producto::findOrFail($id);
         return view('admin.productos.show', compact('producto'));
     }
 
     // Método para mostrar el formulario de edición de un producto
     public function edit($id)
     {
         $producto = Producto::findOrFail($id);
         return view('admin.productos.edit', compact('producto'));
     }
 
     // Método para actualizar los datos de un producto editado
     public function update(Request $request, $id)
    {
        // Validar los datos del formulario, incluida la imagen (opcional)
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // La imagen es opcional
    ]);

    // Obtén el producto a actualizar
    $producto = Producto::findOrFail($id);

    // Actualiza los atributos del producto con los valores del formulario
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->precio = $request->precio;

    // Si se proporciona una nueva imagen, guarda la nueva imagen
    if ($request->hasFile('image')) {
        // Elimina la imagen anterior si existe
        // (opcional, dependiendo de tus requerimientos)
        // Storage::delete('public/' . $producto->image);

        // Obtener el nombre de la nueva imagen y moverla al directorio de destino
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/productos'), $imageName);

        // Actualizar la ruta de la imagen en la base de datos
        $producto->image = 'images/productos/' . $imageName;
    }

    // Guarda los cambios en la base de datos
    $producto->save();

    // Redirige a la página de detalles del producto actualizado
    return redirect()->route('admin.productos.show', $producto->id)->with('success', 'Producto actualizado correctamente');
    }
     // Método para eliminar un producto
     public function destroy($id)
     {
         // Buscar el producto a eliminar en la base de datos
         $producto = Producto::findOrFail($id);
 
         // Eliminar el producto de la base de datos
         $producto->delete();
 
         // Redirigir a la página de la lista de productos con un mensaje de éxito
         return redirect()->route('admin.productos.index')->with('success', 'Producto eliminado correctamente');
     }
}
