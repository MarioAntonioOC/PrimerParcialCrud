<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class teacherController extends Controller
{
   
    public function index(){
        $teachers = teacher::orderBy('id', 'desc')->paginate(10);
        return view('indexteacher', compact('teachers'));
    }
    public function create(){
        return view('Createteacher');
    }
    public function store(Request $request){
        $request-> validate([
            'Nombre'=>'required',
            'Apellidos'=>'required',
            'Direccion'=>'required',
            'Telefono'=>'required',
            'Especialidad'=>'required',
            'NivelEstudio' =>'required'
        ]);
        teacher::create($request->post());
        return redirect()->route('teacher.index')->with('Confirmado', 'Registro Agregado Con Éxito');
    }
    public function edit(teacher $teacher){
        return view('Editteacher',compact('teacher'));
    }
    public function update(Request $request){
        $request-> validate([
            'Nombre'=>'required',
            'Apellidos'=>'required',
            'Direccion'=>'required',
            'Telefono'=>'required',
            'Especialidad'=>'required',
            'NivelEstudio' =>'required'
        ]);
        teacher::fill($request->post())->save();
        return redirect()->route('teacher.index')->with('Confirmado', 'Registro Actualizado Con Exito');
    }
    public function destroy(teacher $teacher){
        $teacher->delete();
        return redirect()->route('teacher.index')->with('Confirmacion', 'Registro Eliminado Con Éxito');
    }    
}
