<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Editar Cliente</h1>

    <form action="{{Route('Cliente.update',$cliente->ci)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">ci </label>
        <input type="number" name="ci" id="" value="{{$cliente->ci}}"> <br>

        <label for="">nombre </label>
        <input type="text" name="nombre" id="" value="{{$cliente->nombre}}"> <br>

        <label for="">apellido </label>
        <input type="text" name="apellido" id="" value="{{$cliente->apellido}}"> <br>
        <p> luego muetro los demas datos!!!</p>

        <button type="submit">Guardar</button>
    </form>



</body>
</html>
