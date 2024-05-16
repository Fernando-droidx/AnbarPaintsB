<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
        /**
     * Muestra el formulario de inicio de sesión.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Maneja el proceso de inicio de sesión.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');//obtenemos las credenciales necesarias de la DB

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended('/admin'); // Redirigir a la ruta deseada después del inicio de sesión
        }

        // Autenticación fallida
        return back()->withErrors(['message' => 'Credenciales incorrectas'])->withInput();
    }

    /**
     * Cierra la sesión actual del usuario.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
