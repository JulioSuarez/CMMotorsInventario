@extends('navegador')

@section('Contenido')

     <h1> EDICION DE PRODUCTOS </h1>
     <form action="{{Route('Producto.update',$p->id)}}" method="post">
        @csrf
        @method('PUT')

        <label for=""> Cod_OEM </label>
        <input type="text" name="cod_oem" id="" value="{{$p->cod_oem}}"> <br>

        <label for="">Cod_sustituto </label>
        <input type="number" name="cod_sustituto" id="" value="{{$p->cod_sustituto }}"> <br>

        <label for="">Nombre </label>
        <input type="text" name="nombre" id="" value="{{$p->nombre }}"> <br>

        <label for="">Descripcion </label>
        <input type="text" name="descripcion" id="" value="{{$p->descripcion }}"> <br>

        <label for="">Cantidad </label>
        <input type="number" name="cantidad" id="" value="{{$p->cantidad}}"> <br>

        <label for="">Cant. minima </label>
        <input type="number" name="cant_minima" id="" value="{{$p->cant_minima}}"> <br>

        <label for="">Precio 1 </label>
        <input type="number" name="precio1" id="" value="{{$p->precio1}}"> <br>

        <label for="">Precio 2 </label>
        <input type="number" name="precio2" id="" value="{{$p->precio2}}"> <br>

        <label for="">fecha de expiracion </label>
        <input type="date" name="fecha_expiracion" id="" value="{{$p->fecha_expiracion}}"> <br>

        <label for="">Tienda </label>
        <input type="text" name="tienda" id="" value="{{$p->nombre_tienda}}"> <br>

        <label for="">Unidad </label>
        <input type="text" name="unidad" id="" value="{{$p->unidad}}"> <br>

        <label for="">Estado </label>
        <input type="text" name="estado" id="" value="{{$p->estado}}"> <br>

        <label for="">Catergoria </label>
        <select name="categoria" id="">
            <option value="{{$p->categoria}}">{{$p->nombre_categoria}}</option>
            @foreach ($categorias as $cat )
                @if ($p->categoria != $cat->id)
                <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                @endif
         @endforeach
        </select> <br>

        <label for="">Proveedor </label>
        <select name="proveedor" id="">
            <option value="{{$p->id_proveedor}}">{{$p->nombre_proveedor}}</option>
            @foreach ($proveedores as $pro )
                @if ($p->id_proveedor != $pro->id)
                    <option value="{{$pro->id}}">{{$pro->nombre}}</option>
                @endif
            @endforeach
        </select> <br>

        <label for="">Ubicacion </label>
        <select name="ubicacion" id="">
            <option value="{{$p->id_ubicacion}}">{{$p->codigo_ubi}}</option>
            @foreach ($ubicaciones as $ubi )
                @if ($p->id_ubicacion != $ubi->id)
                    <option value="{{$ubi->id}}">{{$ubi->codigo_ubi}}</option>
                @endif
            @endforeach
        </select> <br>
        <button type="submit">Guardar </button>
    </form>

@endsection
