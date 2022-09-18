@extends('navegador')

@section('Contenido')
    <h1>Edit Categoria</h1>

    <form action="{{Route('Categoria.update',$c->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="">Nombre  </label>
        <input type="text" name="nombre" id="" value="{{$c->nombre}}"> <br>

        <label for="">Descripcion </label>
        <input type="text" name="descripcion" id="" value="{{$c->descripcion}}"> <br>

        <button type="submit">Guardar</button>
    </form>
@endsection
