@extends('navegador')

@section('Contenido')
    <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
        <h2 class="text-3xl font-extrabold text-gray-800 md:text-4xl">
            REGISTRO DE VENTAS </h2>
    </div>



    @if (session('RegistroEliminado'))
        <p class="text-white bg-lime-500 p-2 text-sm rounded-xl mx-8">
            Venta Nro: {{ session('RegistroEliminado') }} Eliminada correctamente
        </p>
    @endif

    @if (session('VentasRegistrada'))
        <p class="text-white bg-lime-500 p-2 text-sm rounded-xl mx-8">
            {{ session('VentasRegistrada') }}
        </p>
    @endif

    @if (session('VentasUpdate'))
        <p class="text-white bg-lime-500 p-2 text-sm rounded-xl mx-8">
            {{ session('VentasUpdate') }}
        </p>
    @endif
    <!-- boton de registrar by Julico -->
    <div class="flex flex-wrap items-center px-4 py-2">
        <div class="relative w-full max-w-full flex-grow flex-1 text-left">
            <a href="{{ Route('Venta.create') }}"
                class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-linear duration-300"
                type="button">REGISTRAR</a>
            <!-- class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" -->
        </div>
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50"></h3>
        </div>
    </div>
    <div class="my-4 mx-8 overflow-hidden rounded-lg shadow-xs">
        <!-- reemplace w-full por mx-8 -->
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Nro_Venta</th>
                        <th class="px-4 py-3">Nombre Cliente </th>
                        <th class="px-4 py-3">Nombre Empleado </th>
                        <th class="px-4 py-3">Fecha y hora </th>
                        <th class="px-4 py-3">Monto Total </th>
                        <th class="px-4 py-3">Ver Productps </th>
                        <th class="px-4 py-3">Acciones </th>
                    </tr>
                </thead>

                <tbody class=" bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    @foreach ($ventas as $v)
                        <tr
                            class=" bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $v->id }}</td>
                            <td class="px-4 py-3 text-sm">{{ $v->ci_cliente }}</td>
                            <td class="px-4 py-3 text-sm">{{ $v->ci_empleado }}</td>
                            <td class="px-4 py-3 text-xs">{{ $v->fecha }} - {{ $v->hora }}</td>
                            <td class="px-4 py-3 text-sm">{{ $v->monto_total }}</td>
                            <td> <a class='flex items-center justify-center text-xs font-medium rounded-full px-4 py-1  space-x-1 border-2 border-black bg-white hover:bg-black hover:text-white text-black dark:bg-slate-800 dark:text-white dark:border-white dark:hover:bg-white dark:hover:text-black'
                                    href="{{ Route('Venta.show', $v->id) }}">
                                    Ver</a>
                            </td>

                            <td> <a class='break-inside bg-[#D20939] rounded-xl p-2 mb-4 w-full text-white'
                                    href="{{ Route('Venta.edit', $v->id) }}">Editar</a></td>

                            <td>
                                <form action="{{ Route('Venta.destroy', $v->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                        class='flex items-center justify-center text-xs font-medium rounded-full px-4 py-1  space-x-1 border-2 border-black bg-white hover:bg-black hover:text-white text-black dark:bg-slate-800 dark:text-white dark:border-white dark:hover:bg-white dark:hover:text-black'>
                                        <span>Eliminar</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
