@extends('navegador')

@section('Contenido')
    <h1>CREAR PROVEEDOR</h1>

    <form action="{{Route('Proveedor.store')}}" method="POST">
        @csrf
        @method('POST')
        <label for="">CI/NIT </label>
        <input type="number" name=" nit" id="" value=""> <br>

        <label for="">Nombre/Empresa </label>
        <input type="text" name="nombre" id="" value=""> <br>

        <label for="">Tipo </label>
        <input type="text" name="tipo" id="" value=""> <br>


        <button type="submit">Guardar</button>
    </form>

@endsection
