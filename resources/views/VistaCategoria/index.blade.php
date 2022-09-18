@extends('navegador')

@section('Contenido')

    <h1> LISTA DE Categorias </h1>
    <p> <a href="{{Route('Categoria.create')}}"> crear Empleado</a></p>
    <table>
        <tr>

          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Acciones</th>
        </tr>
        @foreach ($categorias as $c )
        <tr>

            <td>{{$c->nombre}}</td>
            <td>{{$c->descripcion}}</td>
            <td><a href="{{Route('Categoria.edit',$c->id)}}">Editar</a></td>
            <td>
                <form action="{{Route('Categoria.destroy',$c->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"> Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
      </table>
@endsection
