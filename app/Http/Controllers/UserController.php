<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Asegúrate de importar el modelo User si no lo has hecho ya
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método para mostrar la lista de usuarios
    public function index()
    {
        $users = User::all();
        return view('admin.usuarios.index', compact('users'));
    }

    // Método para mostrar el formulario de creación de usuarios
    public function create()
    {
        return view('admin.usuarios.create');
    } 

    // Método para guardar un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6', // Ajusta la validación de contraseña según tus requisitos
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    
        return redirect()->route('admin.usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

   
    public function show(User $user)
    {
        return view('admin.usuarios.show', compact('user'));
    }

  
    public function edit(User $user)
    {
        return view('admin.usuarios.edit', compact('user'));
    }

    // Método para actualizar un usuario específico en la base de datos
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:6', // La contraseña es opcional en la actualización
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }


    // Método para eliminar un usuario específico de la base de datos
    public function destroy(User $user)
    {
        // Eliminar el usuario de la base de datos
        $user->delete();

        // Redireccionar a la lista de usuarios con un mensaje
        return redirect()->route('admin.usuarios.index')
                         ->with('success', 'Usuario eliminado exitosamente.');
    }
}
