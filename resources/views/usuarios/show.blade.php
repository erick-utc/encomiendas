<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <div class="mb-4 p-4">
            <a href="{{ route("usuarios.index") }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Volver a usuarios</a> 
        </div>
        
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="flex justify-end px-4 pt-4">
                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5" type="button">
                    <span class="sr-only">Open dropdown</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2" aria-labelledby="dropdownButton">
                    <li>
                        <a href="{{route('usuarios.edit', $usuario)}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Editar</a>
                    </li>
                    <li>
                        <form action="{{route('usuarios.destroy', $usuario)}}" method="POST">
                            @csrf
                    
                            @method('DELETE')
                            <button type="submit" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Borrar</button>
                        </form>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{URL::asset('/storage/' . $usuario->thumbnail)}}" alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900">{{$usuario->nombre}} {{$usuario->apellido1}} {{$usuario->apellido2}}</h5>
                <span class="text-sm text-gray-500">Correo: {{$usuario->email}}</span>
                <span class="text-sm text-gray-500">Telefono: {{$usuario->telefono}}</span>
                {{-- <div class="flex mt-4 md:mt-6">
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Add friend</a>
                    <a href="#" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Message</a>
                </div> --}}
            </div>
        </div>

    </main>

</x-page-layout>