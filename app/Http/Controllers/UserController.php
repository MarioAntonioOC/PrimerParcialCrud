<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de tener el modelo User en tu aplicación

class UserController extends Controller
{
    public function index()
    {
        // Mostrar una lista de usuarios
        $users = User::all();
        return view('UsersIndex', compact('users'));
    }

    public function show($id)
    {
        // Mostrar detalles de un usuario específico
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function create()
    {
        // Mostrar el formulario de registro
        return view('userCreate');
    }

    public function store(Request $request)
    {
        // Validar y almacenar un nuevo usuario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('user.index', $user->id);
    }

    public function edit($id)
    {
        // Mostrar el formulario de edición
        $user = User::findOrFail($id);
        return view('UsersEdit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar un usuario existente
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
        ]);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->has('password') ? bcrypt($request->input('password')) : $user->password,
        ]);

        return redirect()->route('user.index', $user->id);
    }

    public function destroy( User $user)
    {
        // Eliminar un usuario
        $user->delete();
        return redirect()->route('user.index')->with('Confirmacion', 'Registro Eliminado Con Éxito');
    }
    
}
