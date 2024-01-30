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
    public function store(Request $request){
        $request-> validate([
            'Nombre'=>'required',
            'Apellidos'=>'required',
            'Direccion'=>'required',
            'Telefono'=>'required',
            'Email'=>'required'
        ]);
        students::create($request->post());
        return redirect()->route('students.index')->with('Confirmado', 'Registro Agregado Con Exito');
    }
    public function edit(students $student){
        return view('edit',compact('students'));
    }
    public function update(Request $request){
        $request-> validate([
            'Nombre'=>'required',
            'Apellidos'=>'required',
            'Direccion'=>'required',
            'Telefono'=>'required',
            'Email'=>'required'
        ]);
        students::fill($request->post())->save();
        return redirect()->route('students.index')->with('Confirmado', 'Registro Actualizado Con Exito');
    }
    public function delete(students $student){
        $student->delete();
        return redirect()->route('students.index')->with('Confirmacion', 'Registro Eliminado Con Exito');
    }
}
