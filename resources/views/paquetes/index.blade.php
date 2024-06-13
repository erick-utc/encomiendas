<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl dark:text-white">Paquetes</h1>
        <a href="{{route('paquetes.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 inline-block">Crear paquete</a>
   
    
        <ul class="px-4 pt-2 max-w-md space-y-1 text-gray-500 list-none list-inside dark:text-gray-400">
            @foreach ($paquetes as $paquete)
                <li>
                    <a href="{{route('paquetes.show', $paquete)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{$paquete->numero}} - {{$paquete->descripcion}} </a>
                </li>
            @endforeach
        </ul>

        {{ $paquetes->links() }}

    </main>
</x-page-layout>