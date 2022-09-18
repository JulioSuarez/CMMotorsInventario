@extends('navegador')

@section('Contenido')

<form action="{{Route('Venta.update',$cliente->id)}}" method="POST">
    @csrf @method('PUT')
    <h1  class="font-serif text-gray-800 text-2xl "> Editar Nro. Venta:{{$cliente->id}}</h1>
    <label  class="font-serif text-gray-800" for=""> Cliente: {{$cliente->nombre_cliente}} {{$cliente->apellido}}</label>
    <button class="border-black"> <a href="{{Route('Cliente.edit',$cliente->ci_cliente)}}"> || Editar Cliente</a></button>
    <div class="grid grid-cols-2">
        <label  class="font-serif text-gray-800" for=""> Empleado: {{$cliente->nombre_empleado}} </label>
        <label  class="font-serif text-gray-800 text-right mr-8" for=""> Monto Total: {{$cliente->monto_total}} bs</label>

        <input type="text" value="{{$cliente->ci_cliente}}" name="ci_cliente" hidden>
        <input type="text" value="{{$cliente->ci_empleado}}" name="ci_empleado" hidden>
        <input type="text" value="{{$cliente->monto_total}}" name="monto_total" hidden>

    </div>

    <div class="overflow-x-auto p-3">
        <table class="table-fixed w-full">
            <thead class="text-xs font-semibold uppercase text-black bg-gray-50">
                <tr>
                    <th class="p-2">
                        <div class="font-semibold text-left">Nro item</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Cod OEM</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Detalles</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-center">Cantidad</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-center">Precio</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-center">Eliminar</div>
                    </th>
                </tr>
            </thead>

            <tbody class="text-sm divide-y divide-gray-100 lex ">
                @php
                    $i = 1;
                @endphp
                @foreach ($ventas as $v )
                    <tr >
                        <input type="text" value="{{$v->id}}" name="id_detalle_venta[]" hidden>

                        <td class="p-2">
                            <div class="text-center font-medium text-green-500">
                                {{$i}} @php $i++; @endphp
                            </div>
                        </td>

                        <td class="p-2">
                            <input type="text" class="text-left font-medium text-green-500"
                            name="id_producto[]" value="{{$v->id_producto}}" id="cod_oem">

                        </td>
                        <td class="p-2">
                            <input type="text" class="text-left font-medium text-black"
                            name="detalles[]"  value="{{$v->nombre_producto}}" id="detalles">
                        </td>
                        <td class="p-2">
                            <input type="number" class="text-right font-medium text-black"
                            name="cantidad[]"  value="{{$v->cantidad}}" id="cantidad" min="1" max="9">
                        </td>

                        <td class="p-2">
                            <input class="text-left font-medium text-black"
                            name="precio[]" id="precio" value="{{$v->precio}}" >
                        </td>

                        {{-- botono de elimniar --}}
                        <td class="p-2">
                            <div class="flex justify-center">
                                <button>
                                    <svg class="w-8 h-8 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            {{-- </div> --}}
                {{-- <div id="contenedor">

                </div> --}}

            </tbody>
            {{-- @endfor --}}
        </table>
    </div>


      <button type="submit"> Guardar </button>

    </form>


@endsection
