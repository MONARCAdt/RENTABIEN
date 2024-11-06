<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function showUsers(Request $request)
    {
        $search = $request->input('search');
        $users = User::when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', "%{$search}%")
                         ->orWhere('email', 'LIKE', "%{$search}%")
                         ->orWhere('phone', 'LIKE', "%{$search}%");
        })->get();

        return view('admin.usuarios', compact('users', 'search'));
    }

    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('admin.useredit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $id,
        'phone' => 'nullable|string|max:20',
    ]);

    $user->update($request->only(['name', 'email', 'phone']));

    return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
}

public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente');
}


}
