@extends('navegador')

@section('Contenido')

    {{-- <div class="px-6 pt-6 2xl:container">

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                <div class="max-w-md w-full space-y-8">
                    <div class="mb-10">
                        <h3 class="font-semibold text-2xl text-gray-800">CREAR NUEVA UBICACION </h3>
                    </div>


                    <form action="{{Route('Ubicacion.store')}}" method="POST"
                        class="w-full max-w-lg">
                            @csrf
                            @method('POST')

                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Codigo de Ubicacion
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded py-3 px-4 mb-3 border border-gray-200 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-first-name" type="text" name="codigo_ubi">
                            </div>
                            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    Seleccione Un Estante
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-state"
                                    name="codigo_estante">
                                        @foreach ($estantes as $es )
                                           <option value="{{$es->id}}"> {{$es->nombre}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center bg-blue-900  hover:to-blue-900 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                Guardar
                            </button>
                        </div>
                    </form>

                </div> --}}






                {{-- <div class="max-w-md w-full space-y-8">
                    <div class="mb-10">
                        <h3 class="font-semibold text-2xl text-gray-800">CREAR NUEVO ESTANTE </h3>
                   </div>

                    <form action="{{Route('Estante.store')}}" method="POST"
                        class="w-full max-w-lg">
                        @csrf
                        @method('POST')

                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Nombre del Estante
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-password"
                                type="text" name="nombre">

                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Nombre del Estante
                                </label>
                                <textarea class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-password"
                                 type="text" name="descripcion" >
                                </textarea>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Nro Columnas
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded py-3 px-4 mb-3 border border-gray-200 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-first-name"
                                 type="number" name="nro_columnas">
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Nro Filas
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded py-3 px-4 mb-3 border border-gray-200 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-first-name"
                                type="number" name="nro_filas">
                            </div>



                            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    Seleccione Un Estante
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-state"
                                    name="codigo_estante">
                                        @foreach ($estantes as $es )
                                           <option value="{{$es->id}}"> {{$es->nombre}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center bg-blue-900  hover:to-blue-900 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                Guardar
                            </button>
                        </div>
                    </form>

                </div>



 --}}


            {{-- <div class="max-w-md w-full space-y-8">
                <div class="mb-10">
                    <h3 class="font-semibold text-2xl text-gray-800">REGISTRATION FORM </h3>
                    <p class="text-gray-500">Please register your account.</p>
                </div>
                <div class="flex">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <button type="submit" class="w-full flex items-center justify-center bg-red-500  hover:bg-red-400 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                            Sign up with
                            <svg class="w-4 ml-2" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.99 13.9v-3.72h9.36c.14.63.25 1.22.25 2.05 0 5.71-3.83 9.77-9.6 9.77-5.52 0-10-4.48-10-10S6.48 2 12 2c2.7 0 4.96.99 6.69 2.61l-2.84 2.76c-.72-.68-1.98-1.48-3.85-1.48-3.31 0-6.01 2.75-6.01 6.12s2.7 6.12 6.01 6.12c3.83 0 5.24-2.65 5.5-4.22h-5.51v-.01Z"/></svg>
                        </button>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <button type="submit" class="w-full flex items-center justify-center bg-blue-600  hover:bg-blue-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                            Sign up with
                            <svg class="w-4 ml-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" fill-rule="evenodd" d="M9.945 22v-8.834H7V9.485h2.945V6.54c0-3.043 1.926-4.54 4.64-4.54 1.3 0 2.418.097 2.744.14v3.18h-1.883c-1.476 0-1.82.703-1.82 1.732v2.433h3.68l-.736 3.68h-2.944L13.685 22"/></svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-2 my-5">
                    <span class="h-px w-16 bg-gray-200"></span>
                    <span class="text-gray-300 font-normal">or continue with</span>
                    <span class="h-px w-16 bg-gray-200"></span>
                </div>
                <form class="w-full max-w-lg">
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                First Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded py-3 px-4 mb-3 border border-gray-200 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-first-name" type="text" placeholder="Aji">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Last Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-last-name" type="text" placeholder="Mon">
                        </div>
                    </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Password
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-password" type="password" placeholder="******************">

                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    City
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-city" type="text" placeholder="Kochin">
                            </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                        State
                                    </label>
                                    <div class="relative">
                                        <select class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-state">
                                        <option>Kerala</option>
                                        <option>Delhi</option>
                                        <option>Goa</option>
                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                        Zip
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-zip" type="text" placeholder="00000">
                                </div>
                            </div>
                        <div class="space-y-6 mt-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-800">
                                Remember me
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="text-pink-400 hover:text-pink-400">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center bg-pink-400  hover:bg-pink-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                            Sign Up
                        </button>
                    </div>
                </div>
                </form>

                <div class="pt-6 text-center text-gray-400 text-xs">
                        <span>
                    Copyright © 2021-2022
                    <a href="https://codepen.io/uidesignhub" rel="" target="_blank" title="Ajimon" class="text-pink-300 hover:text-pink-400 ">AJI</a></span>
                </div>

        </div> --}}









<h1>lllegue</h1>


{{--

        </div>
    </div> --}}

@endsection
