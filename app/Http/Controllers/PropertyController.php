<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Importar autenticación
use App\Models\PropertyImage;
use Illuminate\Support\Facades\Storage;


class PropertyController extends Controller
{
    public function store(Request $request)
    {
        // Validar la solicitud antes de continuar
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'direccion' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'cuartos' => 'required|integer|min:1',
            'baños' => 'required|integer|min:1',
            'area' => 'required|integer|min:1',
            'estado' => 'required|in:disponible,vendido,pendiente',
            'tipo' => 'required|in:casa,apartamento,finca',
            'image' => 'nullable|array', // Aceptar múltiples archivos
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Cada archivo debe ser una imagen válida
        ]);
    
        // Crear la propiedad
        $property = Property::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'direccion' => $request->direccion,
            'precio' => $request->precio,
            'cuartos' => $request->cuartos,
            'baños' => $request->baños,
            'area' => $request->area,
            'estado' => $request->estado,
            'tipo' => $request->tipo,
            'amueblado' => $request->has('amueblado') ? 'si' : 'no',
            'garaje' => $request->has('garaje') ? 'si' : 'no',
            'user_id' => Auth::id(),
        ]);
    
        // Guardar las imágenes si existen
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/properties'), $imageName);
    
                // Crear un registro en la tabla property_images
                PropertyImage::create([
                    'property_id' => $property->id,
                    'image_path' => 'images/properties/' . $imageName,
                ]);
            }
        }
    
        // Redirigir con mensaje de éxito
        return redirect()->route('registrodevivienda')->with('success', '¡Propiedad creada exitosamente!');
    }

    public function index()
    {
        $properties = Property::all(); // Obtener todas las propiedades
        return view('welcome', compact('properties')); // Pasar a la vista welcome.blade.php
    }



    //WELCOME
    public function filtrar(Request $request)
    {
        // Obtener los filtros del request
        $tipo = $request->input('tipo_propiedad');
        $precioMin = $request->input('precio_min');
        $precioMax = $request->input('precio_max');
        $habitaciones = $request->input('habitaciones');

        // Consulta inicial
        $query = Property::query();

        // Filtrar por tipo de propiedad si está presente
        if ($tipo) {
            $query->where('tipo', $tipo);
        }

        // Filtrar por rango de precio si está presente
        if ($precioMin) {
            $query->where('precio', '>=', $precioMin);
        }

        if ($precioMax) {
            $query->where('precio', '<=', $precioMax);
        }

        // Filtrar por número de habitaciones si está presente
        if ($habitaciones) {
            if ($habitaciones == '4') {
                $query->where('cuartos', '>=', 4);
            } else {
                $query->where('cuartos', $habitaciones);
            }
        }

        // Obtener los resultados filtrados
        $properties = $query->get();

        // Retornar a la vista con las propiedades filtradas
        return view('welcome',  compact('properties'));
    }
    


    //Dashboard.User
    public function dashboard()
    {
        $properties = Property::all();
        return view('dashboard', compact('properties'));
    }

    public function FiltrarDashboard(Request $request)
    {
        // Obtener los filtros del request
        $tipo = $request->input('tipo_propiedad');
        $precioMin = $request->input('precio_min');
        $precioMax = $request->input('precio_max');
        $habitaciones = $request->input('habitaciones');

        // Consulta inicial
        $query = Property::query();

        // Filtrar por tipo de propiedad si está presente
        if ($tipo) {
            $query->where('tipo', $tipo);
        }

        // Filtrar por rango de precio si está presente
        if ($precioMin) {
            $query->where('precio', '>=', $precioMin);
        }

        if ($precioMax) {
            $query->where('precio', '<=', $precioMax);
        }

        // Filtrar por número de habitaciones si está presente
        if ($habitaciones) {
            if ($habitaciones == '4') {
                $query->where('cuartos', '>=', 4);
            } else {
                $query->where('cuartos', $habitaciones);
            }
        }

        // Obtener los resultados filtrados
        $properties = $query->get();

        // Retornar a la vista con las propiedades filtradas
        return view('dashboard',  compact('properties'));
    }
    
    public function show($id)
    {
        // Obtener la propiedad por ID
        $property = Property::findOrFail($id);
    
        // Pasar la propiedad a la vista infovivienda.blade.php
        return view('infovivienda', compact('property'));
    }



    //Contactanos
    public function contactarPropietario(Request $request)
    {
        // Validar el formulario
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        // Obtener la propiedad y el propietario
        $property = Property::findOrFail($request->property_id);
        $owner = $property->user;
    
        // Enviar el mensaje al propietario
        // Aquí puedes implementar la lógica de envío de correo, por ejemplo con Mail::send()
    
        return redirect()->back()->with('success', 'Mensaje enviado al propietario.');
    }   
}