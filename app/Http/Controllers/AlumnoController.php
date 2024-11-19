<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use App\Models\carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos=alumno::all();
        return view('alumnos.consulta',['alumnos'=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras=carrera::all();
        return view('alumnos.alta',['carreras'=>$carreras]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoalumno=new alumno;
        $nuevoalumno->matricula=$request->matricula;
        $nuevoalumno->nombre=$request->nombre;
        $nuevoalumno->apellidos=$request->apellidos;
        $nuevoalumno->sexo=$request->sexo;
        $nuevoalumno->edad=$request->edad;
        $nuevoalumno->carrera=$request->carrera;
        $nuevoalumno->save();
        return redirect('/alumno');
    }

    /**
     * Display the specified resource.
     */
    public function show(alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($alumno)
    {
        $alumnoeditar=alumno::findorfail($alumno);
        $carreras=carrera::all();
        return view('alumnos.actualizacion',['alumno'=>$alumnoeditar,
         'carreras'=>$carreras]);
    }

   
    public function update(Request $request, $alumno)
    {
        $nuevoalumno=alumno::findorfail($alumno);
        $nuevoalumno->matricula=$request->matricula;
        $nuevoalumno->nombre=$request->nombre;
        $nuevoalumno->apellidos=$request->apellidos;
        $nuevoalumno->sexo=$request->sexo;
        $nuevoalumno->edad=$request->edad;
        $nuevoalumno->carrera=$request->carrera;
        $nuevoalumno->save();
        return redirect('/alumno');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($alumno)
    {
        alumno::destroy($alumno);
        return redirect('/alumno');
    }
}
