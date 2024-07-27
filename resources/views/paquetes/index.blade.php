<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl">Paquetes</h1>
        <a href="{{route('paquetes.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none inline-block">Crear paquete</a>
   
    
        <ul class="px-4 pt-2 max-w-md space-y-1 text-gray-500 list-none list-inside">
            @foreach ($paquetes as $paquete)
                <li>
                    <a href="{{route('paquetes.show', $paquete)}}" class="font-medium text-blue-600 hover:underline">{{$paquete->numero}} - {{$paquete->descripcion}} </a>
                </li>
            @endforeach
        </ul>

        {{ $paquetes->links() }}

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-6">
            <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Numero
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Peso
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Condicion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tamano
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paquetes as $paquete)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$paquete->numero}}
                        </td>
                        <td class="px-6 py-4">
                            {{$paquete->descripcion}}
                        </td>
                        <td class="px-6 py-4">
                            {{$paquete->peso}}
                        </td>
                        <td class="px-6 py-4">
                            {{$paquete->condicion}}
                        </td>
                        <td class="px-6 py-4">
                            {{$paquete->tipo}}
                        </td>
                        <td class="px-6 py-4">
                            {{$paquete->tamano}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('paquetes.show', $paquete)}}" class="font-medium text-blue-600 hover:underline">Ver Informacion</a>
                            {{-- <a href="{{route('paquetes.edit', $paquete)}}" class="font-medium text-blue-600 hover:underline">Editar</a> --}}
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>

    </main>
</x-page-layout>