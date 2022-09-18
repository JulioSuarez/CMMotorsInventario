@extends('navegador')

@section('Contenido')
    <h1>Crear Categoria</h1>

    <form action="{{Route('Categoria.store')}}" method="POST">
        @csrf
        @method('POST')

        <label for="">Nombre  </label>
        <input type="text" name="nombre" id="" value=""> <br>

        <label for="">Descripcion </label>
        <input type="text" name="descripcion" id="" value=""> <br>

        <button type="submit">Guardar</button>
    </form>
@endsection
