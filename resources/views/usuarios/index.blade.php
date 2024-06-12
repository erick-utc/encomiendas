<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl dark:text-white">Usuarios</h1>
        <a href="{{route('usuarios.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 inline-block">Crear usuario</a>
   
    
        <ul class="px-4 pt-2 max-w-md space-y-1 text-gray-500 list-none list-inside dark:text-gray-400">
            @foreach ($usuarios as $usuario)
                <li>
                    <a href="{{route('usuarios.show', $usuario)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{$usuario->cedula}} - {{$usuario->nombre}} {{$usuario->apellido1}} {{$usuario->apellido2}}</a>
                </li>
            @endforeach
        </ul>

        {{ $usuarios->links() }}

    </main>
</x-page-layout>