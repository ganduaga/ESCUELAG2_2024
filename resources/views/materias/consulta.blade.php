@extends('dashboard')

@section('contenido')
    <a href='/materia/create'>
        <button type="button" class="btn btn-success">Registrar Materia</button>
    </a> <br><br>

    <table class="table table-success table-striped">
        <thead>
            <th scope="col">Materia</th>
            <th scope="col">Creditos</th>
            <th scope="col">ID Carrera</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
            <tr>
                <td>{{$materia->nombre}}</td>
                <td>{{$materia->creditos}}</td>
                <td>{{$materia->carrerasf->nombre}}</td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                    <a href='/materia/{{$materia->id}}/edit' class="btn btn-success" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/materia/{{$materia->id}}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button type='submit' onClick="return confirm('Estas seguro')" class="btn btn-danger">
                            Borrar
                        </button>
                    </form>
                </div>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

@endsection
