<?php

namespace App\Http\Controllers;

use App\Models\carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras=carrera::all();
        return view('carreras.consulta',["carreras"=>$carreras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carreras.alta',["ruta"=>"/carrera"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevacarrera= new carrera;
        $nuevacarrera->nombre=$request->input('nombre');
        $nuevacarrera->vigencia=$request->input('vigencia');
        $nuevacarrera->save();
        return redirect('/carrera');
    }

    /**
     * Display the specified resource.
     */
    public function show(carrera $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($carrera)
    {
        $carreraeditar= carrera::findorfail($carrera);
        return view('carreras.actualizacion',['carrera'=>$carreraeditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $carrera)
    {
        $nuevacarrera= carrera::findorfail($carrera);
        $nuevacarrera->nombre=$request->input('nombre');
        $nuevacarrera->vigencia=$request->input('vigencia');
        $nuevacarrera->save();
        return redirect('/carrera');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($carrera)
    {
        carrera::destroy($carrera);
        return redirect('/carrera');
    }
}
