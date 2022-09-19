@extends('navegador')

@section('Contenido')
    <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
        <h2 class="text-3xl font-extrabold text-gray-800 md:text-4xl">
            LISTA DE PRODUCTOS </h2>

    </div>

    <div class="w-full  my-6 content-center">
        <a class="px-8 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:bg-blue-600 focus:outline-none sm:mx-2"
            href="{{ Route('Producto.create') }}"> Crear Producto</a>
        <a class="px-8 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:bg-blue-600 focus:outline-none sm:mx-2"
            href="{{ Route('Categoria.create') }}"> Crear Categoria</a>
        <a class="px-8 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:bg-blue-600 focus:outline-none sm:mx-2"
            href="{{ Route('Categoria.index') }}"> Lista de Categoria</a>
    </div>


    <div class="my-8 mx-8 overflow-hidden rounded-lg shadow-xs">
        <!-- reemplace w-full por mx-8 -->
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Codigo</th>
                        <th class="px-4 py-3">Productos</th>
                        <th class="px-4 py-3">Precio Sin Factura</th>
                        <th class="px-4 py-3">Precio Con Factura</th>
                        <th class="px-4 py-3">Estado</th>
                        <th class="px-4 py-3">Fecha de Expiración</th>
                        <th class="px-4 py-3">Proveedor</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>

                <tbody class=" bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    @foreach ($orden as $p)
                        <tr
                            class=" bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $p->cod_oem }}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="{{ asset('img/fotosProductos/' . $p->foto) }}" alt=""
                                            loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $p->nombre }}</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">{{ $p->descripcion }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $p->precio_venta_sin_factura }}</td>
                            <td class="px-4 py-3 text-sm">
                                {{ $p->precio_venta_con_factura }}</td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{ $p->estado }} </span>
                                {{-- <a href="{{Route('Producto.show',$p->cod_oem)}}"">holaa</a> --}}
                            </td>
                            <td class="px-4 py-3 text-sm">{{ $p->fecha_expiracion }}</td>
                            <td class="px-4 py-3 text-sm">{{ $p->nombre_proveedor }}
                                <p class="text-xs text-gray-600 dark:text-gray-400">{{ $p->nombre_proveedor_contacto }}
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <button type="button"
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    <a href="{{ Route('Producto.edit', $p->id) }}">
                                        EDITAR
                                    </a></button>
                                    <button type="button"
                                        class="mr-3 text-sm bg-red-700 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        <form action="{{ Route('Producto.destroy', $p->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="ELIMINAR" class=""
                                                onclick="return confirm('Desea Eliminar?')">
                                        </form>
                                    </button>
                            </td>
                        </tr>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <!-- Pagination -->
                <span class="flex col-span-0 mt-0 sm:mt-auto sm:justify-center">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            {{ $orden->links() }}
                        </ul>
                    </nav>
                </span>
            </div>

        </div>
    </div>
@endsection
