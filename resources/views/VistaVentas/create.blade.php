@extends('navegador')

@section('Contenido')
    <form action="{{ Route('Venta.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 p-8 gap-4">

            <div
                class="bg-gray-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-4 dark:border-gray-600 text-white font-medium group">
                <div class="w-full text-left">
                    <label for="cliente" class="text-2xl text-gray-600 dark:text-white">
                        Nombre del Cliente:
                    </label>
                    <input id="cliente"
                        class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        name="cliente" type="text" />
                </div>
            </div>

            <div
                class="bg-gray-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-4 dark:border-gray-600 text-white font-medium group">
                <div class="w-full text-left">
                    <label for="cliente" class="text-2xl text-gray-600 dark:text-white">
                        CI/NIT:
                    </label>
                    <input
                        class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        id="ci_autocomplete" name="ci_cliente" type="number" autofocus="true" />
                </div>
            </div>

            <div
                class="bg-gray-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-4 dark:border-gray-600 text-white font-medium group">
                <div class="w-full text-left">
                    <label for="cliente" class="text-2xl text-gray-600 dark:text-white">
                        Telefono:
                    </label>
                    <input id="telefono"
                        class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        name="telefono" type="number" />
                </div>
            </div>

            <div
                class="bg-gray-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-4 dark:border-gray-600 text-white font-medium group">
                <div class="w-full text-left">
                    <label for="cliente" class="text-2xl text-gray-600 dark:text-white">
                        Direccion:
                    </label>
                    <input id="dir"
                        class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        name="dir" type="text" />
                </div>
            </div>

            <div
                class="bg-gray-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-4 dark:border-gray-600 text-white font-medium group">
                <div class="w-full text-left">
                    <label for="cliente" class="text-2xl text-gray-600 dark:text-white">
                        Empresa:
                    </label>
                    <input id="empresa"
                        class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        name="empresa" type="texto" />
                </div>
            </div>

            <div
                class="bg-gray-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-4 dark:border-gray-600 text-white font-medium group">
                <div class="w-full text-left">
                    <label for="cliente" class="text-2xl text-gray-600 dark:text-white">
                        Correo:
                    </label>
                    <input id="correo"
                        class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        name="correo" type="email" />
                </div>
            </div>


        </div>
        <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800">
            <div class="relative py-4 px-5 md:px-10 bg-gray-100 dark:bg-gray-800 ">
                <h1 class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                    REALIZAR UNA VENTA
                </h1>
                <p class="" for="">Ejecutivo de Ventas: {{ $empleado->nombre }} {{ $empleado->apellido }}
                </p>
                <input type="number" name="ci_empleado" id="" value="{{ $empleado->ci }}" hidden>


                <!-- Table -->
                <div class="w-auto  mx-8 bg-gray-100 dark:bg-gray-800">
                    <header class="px-5 py-4 border-b border-gray-100">
                        <div id="hola" class="flex cursor-pointer items-center gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <button id="button_adicionar" class="font-semibold text-green-700">
                                Adicionar Fila
                            </button>
                    </header>


                    <div class="overflow-x-auto p-3">
                        <table class="table-fixed w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50 dark:bg-gray-700">
                                <tr>

                                    <th class="p-2">
                                        <div
                                            class="block font-semibold text-gray-600 dark:text-gray-400">
                                            Nro</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="block font-semibold text-gray-600 dark:text-gray-400">Cantidad</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="block font-semibold text-gray-600 dark:text-gray-400">Unidad</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="block font-semibold text-gray-600 dark:text-gray-400">Cod OEM</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="block font-semibold text-gray-600 dark:text-gray-400">Detalles</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="block font-semibold text-gray-600 dark:text-gray-400">Precio Unitario</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="block font-semibold text-gray-600 dark:text-gray-400">Precio Total</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="block font-semibold text-gray-600 dark:text-gray-400">T.Entrega</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="block font-semibold text-gray-600 dark:text-gray-400">Eliminar</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody id="tabla" class="text-sm divide-y divide-gray-100 lex ">
                                <tr class="trtr" id="tr1">

                                    <td class="p-2">
                                        <p class="text-center font-medium text-black dark:text-white" id="item1"> 1 </p>
                                    </td>

                                    <td class="p-2">
                                        <input type="number"
                                            class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            name="cantidad[]" id="cantidad1" min="1" max="9"
                                            value="1">
                                    </td>

                                    <td class="p-2">
                                        <input type="text"
                                            class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none500"
                                            name="unidad[]"
                                            oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                            placeholder="PZA" id="unidad">
                                    </td>

                                    <td class="p-2">
                                        <input type="text"
                                            class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none500"
                                            name="cod_oem[]"
                                            oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                            placeholder="buscar..." id="cod_oem1">
                                    </td>

                                    <td class="p-2 ">
                                        <textarea rows="1"
                                            class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none name="detalles[]"
                                            placeholder="Detalle" id="detalles1"></textarea>
                                    </td>

                                    <td class="p-2">
                                        <input
                                            class="w-full mx-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none name="precio[]"
                                            id="precio1" value="{{ 00 }}" type="number">
                                    </td>

                                    <td class="p-2">
                                        <input
                                            class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none name="subtotal[]"
                                            id="subtotal1" value="{{ 00 }}" type="number" readonly>
                                    </td>

                                    <td class="p-2">
                                        <input type="text"
                                            class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none500"
                                            name="t_entrega[]" placeholder="Días" id="t_entrega">
                                    </td>

                                    {{-- botono de elimniar --}}
                                    <td class="p-2">
                                        <div class="flex justify-center">
                                            <button id="button_eliminar1">
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
                            </tbody>
                        </table>

                        <div>
                            <label class="text-2xl text-gray-600 dark:text-white">Monto total:</label>
                            <input class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                            type="decimal" name="monto_total" id="monto_total"
                                value="0">
                        </div>

                    </div>



                    <!-- total amount -->
                    <div class="flex bg-red-300 justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4">
                        {{-- <div>Total
                    <input  class="text-blue-700 type="number" id="monto_total" value="">bs
                </div> --}}

                        <div class="flex flex-row-reverse p-3">
                            <div class="flex-initial pl-3">
                                <button type="submit"
                                    class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#FFFFFF">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z"
                                            opacity=".3"></path>
                                        <path
                                            d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z">
                                        </path>
                                    </svg>
                                    <span class="pl-2 mx-1">Guardar</span>
                                </button>
                            </div>
                            <div class="flex-initial">
                                <button type="button"
                                    class="flex items-center px-5 py-2.5 font-medium tracking-wide text-black capitalize rounded-md  hover:bg-red-200 hover:fill-current hover:text-red-600  focus:outline-none  transition duration-300 transform active:scale-95 ease-in-out">
                                    <span class="pl-2 mx-1">Cancelar</span>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    </form>

    </div>
    </div>



    <script src="{{ asset('js/Autocompletes/cliente_ventas.js') }}"></script>

    <script src="{{ asset('js/Autocompletes/adicionarProducto.js') }}"></script>

    <!-- {{-- <h1>Lsita de Productos a comprar</h1>
        <table>
            <tr>

            </tr>
            @for ($i = 0; $i < 3; $i++)
            <tr>
                <td>{{$i+1}} </td>
                <td> <input type="number" name="item[]" id="" value="" > </td>
                <td>
                    <select name="codigo[]" id="">
                        @foreach ($productos as $pro)
                            <option value="{{$pro->id}}">{{$pro->nombre}}</option>
                        @endforeach
                    </select>
                </td>

                <td> <input type="number" name="cantidad[]" id="" value="" > </td>
                <td> <input type="text" name="detalle[]" id="" value="" > </td>
                <td> <input type="text" name="P/unidad[]" id="" value="piezas" > </td>
                <td> <input type="number" name="total[]" id="" value="" > </td>
            </tr>
            @endfor
        </table>


        <button type="submit">Guardar</button>
    </form> --}} -->
@endsection
