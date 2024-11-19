<?php

namespace App\Http\Controllers;

use App\Models\materia;
use App\Models\carrera;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias=Materia::all();
        return view('materias.consulta',['materias'=>$materias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras=carrera::all();
        return view('materias.alta',['carreras'=>$carreras]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevamateria=new Materia;
        $nuevamateria->nombre=$request->input('nombre');
        $nuevamateria->creditos=$request->input('creditos');
        $nuevamateria->carrera_id=$request->carrera_id;
        $nuevamateria->save();
        return redirect(url('/materia'));
    }

    /**
     * Display the specified resource.
     */
    public function show(materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($materia)
    {
        $carreras=carrera::all();
        $materia=Materia::findorfail($materia);
        return view('materias.actualizacion',['carreras'=>$carreras, 'materia'=>$materia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $materia)
    {
        $nuevamateria=Materia::findorfail($materia);
        $nuevamateria->nombre=$request->input('nombre');
        $nuevamateria->creditos=$request->input('creditos');
        $nuevamateria->carrera_id=$request->input('carrera_id');
        $nuevamateria->save();
        return redirect(url('/materia'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($materia)
    {
        Materia::destroy($materia);
        return redirect(url('/materia'));
    }
}
