<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        // Validación de los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Obtener las credenciales del formulario de login
        $credentials = $request->only('email', 'password');
    
        // Intentar autenticar al usuario con las credenciales
        if (Auth::attempt($credentials)) {
            // Regenerar la sesión para prevenir ataques de fijación de sesión
            $request->session()->regenerate();
    
            // Verificar si es el usuario especial
            if ($request->email === 'monarcadt@gmail.com' && $request->password === 'Samuel2007*/') {
                return redirect()->route('admin.dashboard'); // Redirigir al dashboard especial
            }
    
            // Redirigir al dashboard general
            return redirect()->intended('dashboard');
        }
    
        // Si la autenticación falla, regresar con un error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }
    
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
