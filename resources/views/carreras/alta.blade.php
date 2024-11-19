@extends('dashboard')

@section('contenido')    
<div class="text-center">
    <h2>Registro de carreras</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
  <div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/carrera" method="POST">
        @csrf
        @include('carreras.formulario')
@endsection