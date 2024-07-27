<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl">Usuarios</h1>
        <a href="{{route('usuarios.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none inline-block">Crear usuario</a>
   

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-6">
            <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Cedula
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Primer Apellido
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Segundo Apellido
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$usuario->cedula}}
                        </td>
                        <td class="px-6 py-4">
                            {{$usuario->apellido1}}
                        </td>
                        <td class="px-6 py-4">
                            {{$usuario->apellido2}}
                        </td>
                        <td class="px-6 py-4">
                            {{$usuario->nombre}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('usuarios.show', $usuario)}}" class="font-medium text-blue-600 hover:underline">Ver Informacion</a>
                            {{-- <a href="{{route('usuarios.edit', $usuario)}}" class="font-medium text-blue-600 hover:underline">Editar</a> --}}
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>

        {{ $usuarios->links() }}

    </main>
</x-page-layout>