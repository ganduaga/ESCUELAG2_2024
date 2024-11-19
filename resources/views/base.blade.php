<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/').'/css/bootstrap.css'}}">
    <link rel="stylesheet" href="{{url('/').'/style.css'}}">
    <title>Sistema de escuelita cuak cuak</title>
</head>
<body>
    <div class="header">
        <ul>
            <a href="{{url('/')}}"><li class="active">Inicio</li></a>
            <a href="{{url('/carrera')}}"><li>Carreras</li></a>
            <a href="{{url('/materia')}}"><li>Materias</li></a>
            <a href="{{url('/alumno')}}"><li>Alumnos</li></a>
        </ul>
    </div>
    <div class="contenedor">
        <div class="frame">

            @yield('contenido')
            
        </div>
    </div>    

    <div class="footer">
        <p>Datos de footer aqui</p>
    </div>
    <script src='{{url("/")."/js/bootstrap.bundle.min.js"}}'></script>
</body>
</html>