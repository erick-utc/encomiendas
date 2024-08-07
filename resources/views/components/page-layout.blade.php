<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Encomiendas')</title>
        <script src="https://cdn.tailwindcss.com"></script>

        @stack('css')
    </head>
    <body class="relative min-h-screen">
        <nav class="bg-white border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
              <a href="{{route('homepage')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                  <x-application-logo />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap">Encomiendas</span>
              </a>
              <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                  </svg>
              </button>
              
              <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                  @auth  
                  <li>
                    <a href="{{route('usuarios.index')}}" class="{{request()->is('usuarios/*') || request()->is('usuarios') ? 
                    'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' :
                    'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent'}}">Usuarios</a>
                  </li>
                  <li>
                    <a href="{{route('paquetes.index')}}" class="{{request()->is('paquetes/*') || request()->is('paquetes') ? 
                      'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' :
                      'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent'}}">Paquetes</a>
                  </li>
                  <li>
                    <a href="{{route('ordenes.index')}}" class="{{request()->is('ordenes/*') || request()->is('ordenes') ? 
                      'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' :
                      'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent'}}">Ordenes</a>
                  </li>
                  <li>
                    <a href="{{route('encomiendas.index')}}" class="{{request()->is('encomiendas/*') || request()->is('encomiendas') ? 
                      'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' :
                      'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent'}}">Encomiendas</a>
                  </li>
                  @endauth
                  @if (Route::has('login'))
                    @auth
                      <li>
                        <a
                            href="{{ url('/dashboard') }}"
                            class="{{request()->is('dashboard/*') || request()->is('dashboard') ? 
                              'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' :
                              'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent'}}"
                        >
                            Dashboard
                        </a>
                      </li>
                    @else
                      <li>
                        <a
                            href="{{ route('login') }}"
                            class="{{request()->is('login/*') || request()->is('login') ? 
                              'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' :
                              'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent'}}"
                        >
                            Log in
                        </a>
                      </li>

                        @if (Route::has('register'))
                          <li>
                            <a
                                href="{{ route('register') }}"
                                class="{{request()->is('register/*') || request()->is('register') ? 
                                'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' :
                                'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent'}}"
                            >
                                Register
                            </a>
                          </li>
                        @endif
                    @endauth
                  @endif
                </ul>
              </div>
            </div>
          </nav>
        {{ $slot }}
        @yield('content')

        @stack('js')

        <footer class="bg-white rounded-lg shadow absolute -bottom-20 w-full ">
          <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="#" class="hover:underline">Encomiendas™</a>. All Rights Reserved.
          </span>
          <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
              <li>
                  <a href="{{Route('about')}}" class="hover:underline me-4 md:me-6">Nosotros</a>
              </li>
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
              </li>
              <li>
                  <a href="#" class="hover:underline">Contact</a>
              </li>
          </ul>
          </div>
        </footer>

        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    </body>

</html>