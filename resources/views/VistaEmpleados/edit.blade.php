<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Editar Empleado</h1>

    <form action="{{Route('Empleado.update',$empleado->ci)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">nombre de usuario </label>
        <input type="text" name="user" id="" value="{{$user->nombre_usuario}}"> <br>

        <label for="">correo electronico </label>
        <input type="email" name="correo" id="" value="{{$user->correo_electronico}}"> <br>

        <label for="">contrasena </label>
        <input type="password" name="password" id="" value="{{$user->password}}"> <br>

        <label for="">ci </label>
        <input type="number" name="ci" id="" value="{{$empleado->ci}}"> <br>

        <label for="">nombre </label>
        <input type="text" name="nombre" id="" value="{{$empleado->nombre}}"> <br>

        <label for="">apellido </label>
        <input type="text" name="apellido" id="" value="{{$empleado->apellido}}"> <br>

        <label for="">telefono </label>
        <input type="number" name="telefono" id="" value="{{$empleado->telefono}}"> <br>


        <button type="submit">Guardar</button>
    </form>



</body>
</html>
