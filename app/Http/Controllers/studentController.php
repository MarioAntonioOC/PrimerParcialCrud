<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class studentController extends Controller
{
    public function index(){
        $students = students::orderBy('id', 'desc')->paginate(10);
        return view('index', compact('students'));
    }
    
    public function create(){
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Apellidos' => 'required',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'Email' => 'required|email', // Puedes agregar una validación de correo electrónico si lo deseas
        ]);
    
        students::create($request->post());
    
        return redirect()->route('students.index')->with('Confirmado', 'Registro Agregado Con Éxito');
    }
    
    public function edit(students $student){
        return view('edit', compact('student'));
    }
    
    public function update(Request $request, students $student){
        $request->validate([
            'Nombre' => 'required',
            'Apellidos' => 'required',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'Email' => 'required'
        ]);
    
        $student->update($request->all());
        return redirect()->route('students.index')->with('Confirmado', 'Registro Actualizado Con Éxito');
    }    
    
    public function destroy(students $student){
        $student->delete();
        return redirect()->route('students.index')->with('Confirmacion', 'Registro Eliminado Con Exito');
    }
    public function show(students $student)
{
    return view('show', compact('student'));
}

}
