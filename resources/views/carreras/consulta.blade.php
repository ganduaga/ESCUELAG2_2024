@extends('dashboard')

@section('contenido')
    <a href='/carrera/create'>
        <button type="button" class="btn btn-success">Registrar Carrera</button>
    </a> <br><br>

    <table class="table table-success table-striped">
        <thead>
            <th scope="col">Carrera</th>
            <th scope="col">Vigencia</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
            <tr>
                <td>{{$carrera->nombre}}</td>
                <td>{{$carrera->vigencia}}</td>
                <td>
                <div class="row align-items-start">
                    <div class="col">
                    <a href='/carrera/{{$carrera->id}}/edit' class="btn btn-success" href="#" role="button">Editar</a>
                    </div>
                    <div class="col">
                    <form action='/carrera/{{$carrera->id}}' method="POST">
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
