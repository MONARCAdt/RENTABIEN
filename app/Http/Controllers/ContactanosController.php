<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email',
            'ciudad' => 'required|string',
            'servicio' => 'required|string',
            'mensaje' => 'nullable|string'
        ]);
    
        // Enviar el correo electrónico
        $correo = new ContactanosMailable($request->all());
    
        try {
            Mail::to('monarcadt@gmail.com')->send($correo);
            // Redireccionar con un mensaje de éxito
            return redirect()->route('contactanos')->with('success', '¡Mensaje enviado correctamente!');
        } catch (\Exception $e) {
            // Manejo de errores en el envío del correo
            return redirect()->route('contactanos')->with('error', 'Hubo un problema al enviar el mensaje. Por favor, intenta de nuevo.');
        }
    }
    
}
