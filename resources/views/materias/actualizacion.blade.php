@extends('dashboard')

@section('contenido')
<div class="text-center">
    <h2>Edición de materias</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
  <div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/materia/{{$materia->id}}" method="POST">
        @csrf
        @method('PATCH')
        @include('materias.formulario')
@endsection