<?php

namespace App\Http\Controllers;

use App\Models\cardex;
use App\Models\alumno;
use App\Models\Materia;
use Illuminate\Http\Request;

class CardexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevocardex=new cardex;
        $nuevocardex->alumno_id=$request->alumno_id;
        $nuevocardex->materia_id=$request->materia_id;
        $nuevocardex->calificacion=$request->calificacion;
        $nuevocardex->save();
        return redirect(url('/cardex/'.$request->alumno_id));
    }

    /**
     * Display the specified resource.
     */
    public function show($cardex)
    {
        $alumno=alumno::findorfail($cardex);
        $materiascarrera=Materia::where('carrera_id',"=",$alumno->carrera)->get();
        return view('cardex.consulta',['alumno'=>$alumno, 'materiascarrera'=>$materiascarrera]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cardex $cardex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cardex $cardex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cardex)
    {
        $alumnoMat=cardex::findorfail($cardex);
        cardex::destroy($cardex);
        return redirect(url('/cardex/'.$alumnoMat->alumno_id));
    }
}
