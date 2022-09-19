@extends('navegador')
@section('Contenido')
    <form class="p-6 flex flex-col justify-center" action="{{Route('Empleado.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="flex flex-col mt-2">
            <label for="name" class="hidden">Usuario</label>
            <input type="name" name="ci" id="name" placeholder="Usuario"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>
        <div class="flex flex-col mt-2">
            <label for="email" class="hidden">Email</label>
            <input type="email" name="email" id="email" placeholder="Correo Electronico"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>
        <div class="flex flex-col mt-2">
            <label for="name" class="hidden">Contraseña</label>
            <input type="password" name="ci" id="name" placeholder="******"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>
        <div class="flex flex-col mt-2">
            <label for="name" class="hidden">Cedula de Identidad</label>
            <input type="name" name="ci" id="name" placeholder="Cedula de Identidad"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="name" class="hidden">Nombre</label>
            <input type="name" name="nombre" id="name" placeholder="Nombre"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="name2" class="hidden">Apellido</label>
            <input type="name" name="apellido" id="name2" placeholder="Apellido"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="tel" class="hidden">Telefono</label>
            <input type="tel" name="telefono" id="tel" placeholder="Numero de Telefono"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Registrar</button>
    </form>

@endsection
