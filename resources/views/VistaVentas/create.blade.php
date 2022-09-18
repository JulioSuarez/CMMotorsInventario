@extends('navegador')

@section('Contenido')
    <form action="{{ Route('Venta.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="container max-w-lg ">
            <div class="relative py-4 px-5 md:px-10 bg-white ">
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">
                    REALIZAR UNA VENTA
                </h1>
                <p class="" for="">Empleado: {{ $empleado->nombre }} {{ $empleado->apellido }} </p>
                <input type="number" name="ci_empleado" id="" value="{{ $empleado->ci }}" hidden>


                <label for="ci_autocomplete" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                    Numero de Carnet:
                </label>
                <div class="relative mt-0 mb-2">
                    <div class="absolute text-gray-600 flex items-center px-4 border-r h-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="3" y="5" width="18" height="14" rx="3" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                            <line x1="7" y1="15" x2="7.01" y2="15" />
                            <line x1="11" y1="15" x2="13" y2="15" />
                        </svg>
                    </div>
                    <input
                        class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-16 text-sm border-gray-300 rounded border"
                        id="ci_autocomplete" name="ci_cliente" type="number" autofocus="true" />
                </div>


                <label for="cliente" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                    Nombre del Cliente:
                </label>
                <input id="cliente"
                    class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                    name="cliente" type="text" />


                <label for="telefono"
                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Telefono:</label>
                <input id="telefono"
                    class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                    name="telefono" type="number" />

                <label for="empresa" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Empresa:</label>
                <input id="empresa"
                    class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                    name="empresa" type="number" />

                <label for="nit" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nit de la
                    Empresa:</label>
                <input id="nit"
                    class="mt-0 mb-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                    name="nit" type="number" />

            </div>
        </div>

        <!-- <div id="xdxd">
                <h1>holaaaaaaaaaaaa</h1>
            </div> -->


            <div class="flex justify-between p-6">
                <div id="hola" class="flex cursor-pointer items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    <button id="button_adicionar" class="font-semibold text-green-700">
                        Adicionar
                    </button>

                </div>
            </div>

        {{-- <div class="max-w-7xl  text-left "> --}}
        <!-- Table -->
        <div class="w-auto  mx-8 bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <label class="font-semibold text-gray-800">Monto total:</label>
                <input class=" text-gray-800" type="number" name="monto_total" id="monto_total"
                value="0">
            </header>


            <div class="overflow-x-auto p-3">
                <table class="table-fixed w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
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

                    {{-- @for ($i = 1; $i <= 1; $i++) --}}
                    <tbody id="tabla" class="text-sm divide-y divide-gray-100 lex ">
                        @php $i=1;       @endphp
                        {{-- <div class="clonar"> --}}
                        <tr class="trtr" id="tr{{$i}}">

                            <td class="p-2" >
                                <p class="text-center font-medium text-black"
                                id="item{{$i}}"">
                                     {{$i}}
                                </p>
                            </td>


                            <td class="p-2">
                                <input type="text" class="text-left font-medium text-green-500" name="cod_oem[]"
                                    placeholder="cod" id="cod_oem{{$i}}">

                            </td>
                            <td class="p-2">
                                <input type="text" class="text-left font-medium text-black" name="detalles[]"
                                    placeholder="detalle" id="detalles{{$i}}">
                            </td>
                            <td class="p-2">
                                <input type="number" class="text-right font-medium text-black" name="cantidad[]"
                                    id="cantidad{{$i}}" min="1" max="9" value="1" >
                            </td>

                            <td class="p-2">
                                <input class="text-left font-medium text-black" name="precio[]" id="precio{{$i}}"
                                value="{{00.00}}" type="number">
                            </td>

                            {{-- botono de elimniar --}}
                            <td class="p-2">
                                <div class="flex justify-center">
                                    <button id="button_eliminar{{$i}}" >
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

{{--
                        <tr class="trtr">

                            <td class="p-2">
                                <p class="text-center font-medium text-black">
                                    @php $i++; @endphp {{$i}}
                                </p>
                            </td>


                            <td class="p-2">
                                <input type="text" class="text-left font-medium text-green-500" name="cod_oem[]"
                                    placeholder="cod1313" id="cod_oem{{2}}">

                            </td>
                            <td class="p-2">
                                <input type="text" class="text-left font-medium text-black" name="detalles[]"
                                    placeholder="cemento camba" id="detalles{{2}}">
                            </td>
                            <td class="p-2">
                                <input type="number" class="text-right font-medium text-black" name="cantidad[]"
                                    placeholder="1" id="cantidad" min="1" max="9">
                            </td>

                            <td class="p-2">
                                <input class="text-left font-medium text-black" name="precio[]" id="precio{{2}}">
                            </td>

                            <!-- botono de elimniar -->>
                            <td class="p-2">
                                <div class="flex justify-center">
                                    <button id="button_eliminar" >
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
                        </tr> --}}






                        {{-- </div> --}}
                        {{-- <div id="contenedor">

                        </div> --}}

                    </tbody>
                    {{-- @endfor --}}
                </table>
            </div>




            <!-- total amount -->
            <div class="flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4">
                {{-- <div>Total
                    <input  class="text-blue-700 type="number" id="monto_total" value="">bs
                </div> --}}

                <div class="flex flex-row-reverse p-3">
                    <div class="flex-initial pl-3">
                        <button type="submit"
                            class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                fill="#FFFFFF">
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

    <script src="{{ asset('js/Autocompletes/cliente_ventas.js') }}"></script>

    <script src="{{ asset('js/Autocompletes/adicionarProducto.js')}}"></script>

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
