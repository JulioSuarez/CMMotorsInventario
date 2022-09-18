<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ route('modificar.store') }}" method="POST">
            @csrf

            <!-- Nombre -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- paterno -->
            <div>
                <x-label for="paterno" :value="__('Paterno')" />

                <x-input id="paterno" class="block mt-1 w-full" type="text"  name="paterno" :value="old('paterno')" required />
            </div>

            <!-- materno -->
            <div>
                <x-label for="materno" :value="__('Materno')" />

                <x-input id="materno" class="block mt-1 w-full" type="text" name="materno" :value="old('materno')" required />
            </div>

            <!-- direccion -->
            <div>
                <x-label for="direccion" :value="__('Dirección')" />

                <x-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required />
            </div>

            <!-- telefono -->
            <div>
                <x-label for="telefono" :value="__('Teléfono')" />

                <x-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required />
            </div>

            <!-- nit -->
            <div>
                <x-label for="nit" :value="__('NIT')" />

                <x-input id="nit" class="block mt-1 w-full" type="text" name="nit" :value="old('nit')" required />
            </div>

            <!-- fecha de nacimiento -->
            <div>
                <x-label for="feha_nacimiento" :value="__('Fecha de Nacimiento')" />

                <x-input id="feha_nacimiento" class="block mt-1 w-full" type="date" name="feha_nacimiento" :value="old('feha_nacimiento')" required />
            </div>

            <!-- rol -->
            <div>
                {{-- <label for="">Rol</label> --}}
                {{-- <select name="rol_id"></select>
                    <option value=""></option>
                    @foreach ($hola as $name => $id)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach --}}
            </div>
{{--
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div> --}}
            {{-- boton guardar --}}
            <div class="mt-4">
                <x-button class="ml-4">
                    {{ __('Guardar') }}
                </x-button>
                <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Volver') }}
                 </a>
            </div>
            {{-- boton volver --}}

        </form>
    </x-auth-card>
</x-guest-layout>
