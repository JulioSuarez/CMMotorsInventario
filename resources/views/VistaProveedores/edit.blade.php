@extends('navegador')

@section('Contenido')
<h1>EDITAR PROVEEDOR</h1>

<form action="{{Route('Proveedor.update',$p->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">CI/NIT </label>
    <input type="number" name=" nit" id="" value="{{$p->nit }}"> <br>

    <label for="">Nombre/Empresa </label>
    <input type="text" name="nombre" id="" value="{{$p->nombre }}"> <br>

    <label for="">Tipo </label>
    <input type="text" name="tipo" id="" value="{{$p->tipo }}"> <br>


    <button type="submit">Guardar</button>
</form>
@endsection
