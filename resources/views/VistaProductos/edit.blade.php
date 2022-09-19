@extends('navegador')

@section('Contenido')
    <h1> EDICION DE PRODUCTOS </h1>
        <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 ">
            <div class="md:grid md:grid-cols-2  md:gap-6">
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form action="{{ Route('Producto.update', $p->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div
                                class="px-4 bg-gray-100 dark:bg-gray-700 text-white dark:text-white align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                <!-- <div class="space-y-6 bg-white px-4 py-5 sm:p-6"> -->

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nombre"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Nombre del Producto</label>
                                    <input type="text" name="nombre" value="{{ $p->nombre }}"
                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cod_oem"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Codigo OEM</label>
                                    <input type="text" name="cod_oem" value="{{ $p->cod_oem }}"
                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cod_sustituto"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Codigo Alternativo</label>
                                    <input type="text" name="cod_sustituto" value="{{ $p->alternativo }}"
                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cantidad"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Cantidad en Stock</label>
                                    <input type="text" name="cantidad" value="{{ $p->cantidad }}"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cant_minima"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Cantidad Minima</label>
                                    <input type="text" name="cant_minima" value="{{ $p->cant_minima }}"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="marca"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Marca
                                    </label>
                                    <input type="text" name="marca" value="{{ $p->marca }}"
                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="procedencia"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Procedencia
                                    </label>
                                    <input type="text" name="procedencia" value="{{ $p->procedencia }}"
                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="origen"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Origen del Producto
                                    </label>
                                    <input type="text" name="origen" value="{{ $p->origen }}"
                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="proveedor"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Seleccionar Proveedor</label>
                                    <select name="proveedor"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                        @foreach ($proveedor as $pro)
                                            <option value="{{ $pro->id }}">{{ $pro->nombre_proveedor }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="descripcion"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">Descripción</label>
                                    <div class="mt-1">
                                        <textarea name="descripcion" rows="3"
                                            class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"
                                            placeholder="Detalles del producto"></textarea>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="unidad"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Tipo de Unidad
                                    </label>
                                    <input type="text" name="unidad" value="{{ $p->unidad }}"
                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="precio1"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Precio de Venta Con Factura
                                    </label>
                                    <input type="number" name="precio1" value="{{ $p->precio_con_factura }}"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="precio2"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Precio de Venta Sin Factura
                                    </label>
                                    <input type="number" name="precio2" value="{{ $p->precio_sin_factura }}"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="precio3"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Precio de Compra
                                    </label>
                                    <input type="number" name="precio3" value="{{ $p->precio_compra }}"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="fecha_expiracion"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Fecha expiración
                                    </label>
                                    <input type="date" name="fecha_expiracion" value="{{ $p->fecha_expiracion }}"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tienda"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">Tienda</label>
                                    <select name="tienda"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                        <option>REPUESTOS</option>
                                        <option>FERRETERIA</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="estante"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        En que Estante estara guardado?
                                    </label>
                                    <input type="text" name="estante" value="{{ $p->estante }}"
                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="estado"
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">Estado
                                        del
                                        Producto</label>
                                    <select name="estado"
                                        class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                        <option>HABILITADO</option>
                                        <option>DESHABILITADO</option>
                                    </select>
                                </div>

                                <div>
                                    <label
                                        class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                        Foto del Producto</label>
                                    <div
                                        class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                                viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="foto"
                                                    class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                    <span> Subir un archivo </span>
                                                    <!-- <input name="foto" type="file" class="sr-only"> -->
                                                    <input id="foto" name="foto" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1"> o arrastrar y soltar</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PNG, JPG, JPEG Maximo 10MB.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="https://images.google.com/">Buscar en Google Imagen</a>
                                </div>
                            </div>
                            <div
                                class="px-4 bg-gray-100 dark:bg-gray-700 text-white dark:text-white align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                <button type="submit"
                                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                    Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
