<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos=Alumno::all();
        return view('alumnos.index-alumnos',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create-alumno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=>'required|max:20',
            'nombre'=>'required|max:200',
            'correo'=>['required',
            'email',
            'max:100'],
            'fecha_nacimiento'=>'required|date',
            'sexo'=>'required|max:20',
            'carrera'=>'required|max:100'
        ]);
        $alumno=new Alumno();
        $alumno->codigo=$request->codigo;
        $alumno->nombre=$request->nombre;
        $alumno->correo=$request->correo;
        $alumno->fecha_nacimiento=$request->fecha_nacimiento;
        $alumno->sexo=$request->sexo;
        $alumno->carrera=$request->carrera;
        $alumno->save();
        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
