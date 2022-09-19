@extends('navegador')

@section('Contenido')
<div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 ">
    <div class="md:grid md:grid-cols-2  md:gap-6">
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="{{ Route('Proveedor.update',$p->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="px-4 bg-gray-100 dark:bg-gray-700 text-white dark:text-white align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="nombre_proveedor"
                                class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                Empresa</label>
                            <input type="text" name="nombre_proveedor" value="{{$p->nombre_proveedor }}"
                                oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="nit"
                                class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                NIT</label>
                            <input type="number" name="nit"  value="{{$p->nit }}"
                                oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="nombre_proveedor_contacto"
                                class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                Persona de Contacto</label>
                            <input type="text" name="nombre_proveedor_contacto" value="{{$p->nombre_proveedor_contacto }}"
                                oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="proveedor_telefono"
                                class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                Telefono</label>
                            <input type="number" name="proveedor_telefono" value="{{$p->proveedor_telefono }}"
                                oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="proveedor_correo"
                                class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                Correo</label>
                            <input type="text" name="proveedor_correo" value="{{$p->proveedor_correo}}"
                                class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="direccion"
                                class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                Dirección</label>
                            <input type="text" name="direccion" value="{{$p->proveedor_direccion }}"
                                class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="tipo"
                                class="block text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400">
                                Tipo</label>
                            <input type="text" name="tipo"  value="{{$p->tipo }}"
                                class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                        </div>

                        <div
                            class="px-4 bg-gray-100 dark:bg-gray-700 text-white dark:text-white align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                            <button type="submit"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                Guardar</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
