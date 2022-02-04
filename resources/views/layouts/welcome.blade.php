<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Esta es una página de prueba y muestra. Los datos aquí mostrados no son reales. 
    Se puede interactuar con la página sin ningún problema. La función de compra no está habilitada al completo, no se piden datos bancarios, 
    ni se hace una compra real. Los cursos comprados son vídeos de muestra y los precios no son reales. 
    Al registrarse si es necesario proporcionar un correo real y válido. Estos emails no se utilizarán para enviar correos con informaciones o publicidad.
    Se enviará desde la página un correo para verificar el email introducido en el registro.
    Página web con fines meramente de muestra y pruebas.">
    <title>Inspira Libertad</title>
    <link rel="icon" type="image/x-icon" href="/img/logoInspiraLibertad.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/inspira.js') }}" defer></script>


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div id="divPrincipal" class="container mx-auto min-h-screen">
        <div class="mb-8 pt-5 flex justify-end items-center mr-2 sm:mr-3">
            @if (Route::has('login'))

            @auth
            <div class="mr-3">
                <a href="{{ url('/aPersonal') }}" class="text-sm text-gray-700">Área
                    Personal</a>
            </div>
            <div class="mr-2 sm:mr-3">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"
                    class="px-1 font-bold bg-green-500 text-white text-lg leading-tight uppercase rounded shadow-md hover:bg-green-200 hover:text-green-700 hover:shadow-lg transition duration-150 ease-in-out flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart3" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <span id="spanCant"
                        class="inline-block py-1 px-1.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded ml-2">0</span>
                </button>
            </div>
            <input type="hidden" id="inpInicio" value="1">
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700">Iniciar sesión |</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-2 text-sm text-gray-700">Registro</a>
            @endif
            <div class="mr-2 ml-2 sm:mr-3">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"
                    class="px-1 font-bold bg-green-500 text-white text-lg leading-tight uppercase rounded shadow-md hover:bg-green-200 hover:text-green-700 hover:shadow-lg transition duration-150 ease-in-out flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart3" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <span id="spanCant"
                        class="inline-block py-1 px-1.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded ml-2">0</span>
                </button>
            </div>
            <input type="hidden" id="inpInicio" value="0">
            @endauth

            @endif
        </div>

        <div>
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center text-3xl text-green-500 font-semibold">
                                <a href="{{ route('home') }}">
                                    Inspira Libertad
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                                <x-nav-link :href="route('queEs')" :active="request()->routeIs('queEs')">
                                    {{ __('Qué es') }}
                                </x-nav-link>

                                <x-nav-link :href="route('depAdic')" :active="request()->routeIs('depAdic')">
                                    {{ __('Dependencias y Adicciones') }}
                                </x-nav-link>

                                <x-nav-link :href="route('cursos')" :active="request()->routeIs('cursos')">
                                    {{ __('Cursos') }}
                                </x-nav-link>

                                <x-nav-link :href="route('atPers')" :active="request()->routeIs('atPers')">
                                    {{ __('Atención Personalizada') }}
                                </x-nav-link>

                                <x-nav-link :href="route('retiros')" :active="request()->routeIs('retiros')">
                                    {{ __('Retiros') }}
                                </x-nav-link>

                                <x-nav-link :href="route('sobreMi')" :active="request()->routeIs('sobreMi')">
                                    {{ __('Sobre Mí') }}
                                </x-nav-link>

                                <x-nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
                                    {{ __('Contacto') }}
                                </x-nav-link>
                            </div>
                        </div>

                        <!-- Settings Dropdown -->
                        @auth()
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Cerrar sesión') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        @endauth
                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">

                        <x-responsive-nav-link :href="route('queEs')" :active="request()->routeIs('queEs')">
                            {{ __('Qué Es') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('depAdic')" :active="request()->routeIs('depAdic')">
                            {{ __('Dependencias y Adicciones') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('cursos')" :active="request()->routeIs('cursos')">
                            {{ __('Cursos') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('atPers')" :active="request()->routeIs('atPers')">
                            {{ __('Atención Personalizada') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('retiros')" :active="request()->routeIs('retiros')">
                            {{ __('Retiros') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('sobreMi')" :active="request()->routeIs('sobreMi')">
                            {{ __('Sobre Mí') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
                            {{ __('Contacto') }}
                        </x-responsive-nav-link>

                    </div>

                    <!-- Responsive Settings Options -->
                    @auth()
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                    @endauth
                </div>
            </nav>

            <main>
                @if (session('compra'))
                <div class="w-7xl mt-5 mx-8 md:mx-10 py-6 sm:px-6 lg:px-8 mb-8 text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100"
                    role="alert">
                    <div class="px-4">
                        {{ session('compra') }}
                    </div>
                </div>
                @endif
                @if (session('compraFallida'))
                <div class="w-7xl mt-5 mx-8 md:mx-10 py-6 sm:px-6 lg:px-8 mb-8 text-sm border border-t-8 rounded text-yellow-700 border-yellow-600 bg-yellow-100"
                    role="alert">
                    <div class="px-4">
                        {{ session('compraFallida') }}
                    </div>
                </div>
                @endif
                @yield('content')
            </main>

        </div>
    </div>

    <form id="frmCompra" action="{{ route('carrito.store') }}" method="POST">@csrf</form>

    <!-- Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-green-500" id="exampleModalLabel">Inspira
                        Libertad</h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modalCarrito" class="modal-body relative p-4">
                    Tu carrito está vacío..
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button" class="px-6
                                  py-2.5
                                  bg-red-500
                                  text-white
                                  font-medium
                                  text-xs
                                  leading-tight
                                  uppercase
                                  rounded
                                  shadow-md
                                  hover:bg-red-700 hover:shadow-lg
                                  transition
                                  duration-150
                                  ease-in-out" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="px-6
                              py-2.5
                              bg-blue-500
                              text-white
                              font-medium
                              text-xs
                              leading-tight
                              uppercase
                              rounded
                              shadow-md
                              hover:bg-blue-700 hover:shadow-lg
                              transition
                              duration-150
                              ease-in-out
                              ml-1" onclick="comprar()">Comprar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button id="btnCompra" style="display: none" class="px-6
    py-2.5
    bg-blue-600
    text-white
    font-medium
    text-xs
    leading-tight
    uppercase
    rounded
    shadow-md
    hover:bg-blue-700 hover:shadow-lg
    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
    active:bg-blue-800 active:shadow-lg
    transition
    duration-150
    ease-in-out" data-bs-toggle="modal" data-bs-target="#alertaModal">
        Launch demo modal
    </button>


    <!-- Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="alertaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-green-500" id="exampleModalLabel">Inspira
                        Libertad</h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <span id="spnCompra"></span>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button" class="px-6
                                  py-2.5
                                  bg-red-500
                                  text-white
                                  font-medium
                                  text-xs
                                  leading-tight
                                  uppercase
                                  rounded
                                  shadow-md
                                  hover:bg-red-700 hover:shadow-lg
                                  transition
                                  duration-150
                                  ease-in-out" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>