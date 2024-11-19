@extends('base')
@section('contenido')
<form>
    <p>Nombre de la carrera</p>
    <input type="text" id="nombreCarrera" placeholder="Carrera">
    <p>Numero de creditos</p>
    <input type="number" id="creditos" placeholder="Creditos">
    <div class="btnCont">
        <input id="btnSubir" class="btnSubir" value="Guardar">
    </div>
</form>
@endsection