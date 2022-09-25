@extends('navegador')
@section('Contenido')
    <form class="p-6 flex flex-col justify-center" action="{{ Route('Empleado.update', $empleado->ci) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-col mt-2">
            <label for="user" class="hidden">Nombre de Usuario</label>
            <input type="name" name="user" id="user" placeholder="Usuario" value="{{ $user->nombre_usuario }}"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>
        <div class="flex flex-col mt-2">
            <label for="correo" class="hidden">Email</label>
            <input type="email" name="correo" id="correo" placeholder="Correo Electronico"
                value="{{ $user->correo_electronico }}"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>
        <div class="flex flex-col mt-2">
            <label for="password" class="hidden">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="******" value="{{ $user->password }}"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>
        <div class="flex flex-col mt-2">
            <label for="ci" class="hidden">Cedula de Identidad</label>
            <input type="number" name="ci" id="ci" placeholder="Cedula de Identidad"
                value="{{ $empleado->ci }}"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="nombre" class="hidden">Nombre</label>
            <input type="name" name="nombre" id="nombre" placeholder="Nombre" value="{{ $empleado->nombre }}"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="apellido" class="hidden">Apellido</label>
            <input type="name" name="apellido" id="apellido" placeholder="Apellido" value="{{ $empleado->apellido }}"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <label for="telefono" class="hidden">Telefono</label>
            <input type="tel" name="telefono" id="telefono" placeholder="Numero de Telefono"
                value="{{ $empleado->telefono }}"
                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Seleccionar Rol
            </label>
            @foreach ($roles as $id => $name)
                @php
                    $ban = false;
                @endphp
                @foreach ($empleado->roles as $urol)
                    @if ($id == $urol->id)
                        @php
                            $ban = true;
                        @endphp
                        <input type="checkbox" name="roles[]" checked value="{{ $id }}">{{ $name }}
                    @endif
                @endforeach
                @if ($ban == false)
                    <input type="checkbox" name="roles[]" value="{{ $id }}">{{ $name }}
                @endif
                <br>
            @endforeach
            </select>
        </div>

        <button type="submit"
            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Guardar</button>
    </form>
@endsection
