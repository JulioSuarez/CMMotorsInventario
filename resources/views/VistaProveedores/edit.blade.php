@extends('navegador')

@section('Contenido')
<h1>EDITAR PROVEEDOR</h1>

<form action="{{Route('Proveedor.update',$p->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">CI/NIT </label>
    <input type="number" name=" nit" id="" value="{{$p->nit }}"> <br>

    <label for="">Empresa </label>
    <input type="text" name="nombre" id="" value="{{$p->nombre_proveedor }}"> <br>
    <label for="">Direccion </label>
    <input type="text" name="direccion" id="" value="{{$p->proveedor_direccion }}"> <br>
    <label for="">Telefono </label>
    <input type="text" name="telefono" id="" value="{{$p->proveedor_telefono }}"> <br>
    <label for="">Correo Electronico </label>
    <input type="text" name="correo" id="" value="{{$p->proveedor_correo }}"> <br>
    <label for="">Persona de Contacto </label>
    <input type="text" name="contacto" id="" value="{{$p->nombre_proveedor_contacto }}"> <br>
    <label for="">Tipo </label>
    <input type="text" name="tipo" id="" value="{{$p->tipo }}"> <br>
    <button type="submit">Guardar</button>
</form>
@endsection
