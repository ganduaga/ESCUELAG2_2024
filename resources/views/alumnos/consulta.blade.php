@extends('dashboard')

@section('contenido')
    <a href='/alumno/create'>
        <button type="button" class="btn btn-success">Registrar Alumno</button>
    </a> <br><br>

    <table class="table table-success table-striped">
        <thead>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Sexo</th>
            <th scope="col">Edad</th>
            <th scope="col">Carrera</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td><a href="/cardex/{{$alumno->id}}">{{$alumno->matricula}}</a></td>
                <td><a href="/cardex/{{$alumno->id}}">{{$alumno->nombre}}</a></td>
                <td>{{$alumno->apellidos}}</td>
                <td>{{$alumno->sexo}}</td>
                <td>{{$alumno->edad}}</td>
                <td>{{$alumno->carrerasf->nombre}}</td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                    <a href='/alumno/{{$alumno->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/alumno/{{$alumno->id}}' method="POST">
                        @csrf
                        @method('DELETE')
                        <button onClick="return confirm('¿Estas seguro?')" class="btn btn-danger" type="submit">
                            Borrar
                        </button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

@endsection
