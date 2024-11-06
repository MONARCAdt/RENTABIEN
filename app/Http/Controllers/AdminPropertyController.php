<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;


class AdminPropertyController extends Controller
{
    public function AdminDashboard()
    {
        $adminproperties = Property::all(); // Fetch all properties
        return view('admin.dashboard', compact('adminproperties')); // Use 'adminproperties'
    }
    
    
    public function FiltrarAdminDashboard(Request $request)
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
        return view('admin.dashboard',  compact('adminproperties'));
    }

    public function show($id)
    {
        // Obtener la propiedad por ID
        $property = Property::findOrFail($id);
    
        // Pasar la propiedad a la vista infovivienda.blade.php
        return view('admin.admininfovivienda', compact('property'));
    }

}
