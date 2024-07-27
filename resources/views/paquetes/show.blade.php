<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <div class="mb-4 p-4">
            <a href="{{ route("paquetes.index") }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Volver a paquetes</a> 
        </div>

        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
            <h5 class="mb-4 text-xl font-medium text-gray-500">{{$paquete->descripcion}}</h5>
            <div class="flex items-baseline text-gray-900">
                {{-- <span class="text-3xl font-semibold">$</span> --}}
                <span class="text-5xl font-extrabold tracking-tight">{{$paquete->peso}}</span>
                {{-- <span class="ms-1 text-xl font-normal text-gray-500">Kg</span> --}}
            </div>
            <ul role="list" class="space-y-5 my-7">
                <li class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="text-base font-normal leading-tight text-gray-500 ms-3"><strong>Numero:</strong> {{$paquete->numero}}</span>
                </li>
                <li class="flex">
                    <svg class="flex-shrink-0 w-4 h-4 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="text-base font-normal leading-tight text-gray-500 ms-3"><strong>Tipo:</strong> {{$paquete->tipo}}</span>
                </li>
                <li class="flex">
                    <svg class="flex-shrink-0 w-4 h-4 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="text-base font-normal leading-tight text-gray-500 ms-3"><strong>Condicion:</strong> {{$paquete->condicion}}</span>
                </li>
                <li class="flex">
                    <svg class="flex-shrink-0 w-4 h-4 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="text-base font-normal leading-tight text-gray-500 ms-3"><strong>Tamaño:</strong> {{$paquete->tamano}}</span>
                </li>
            </ul>
            <a href="{{route('paquetes.edit', $paquete)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Editar</a>
            
            <form action="{{route('paquetes.destroy', $paquete)}}" method="POST" class="block w-full">
                @csrf
        
                @method('DELETE')
                <button type="submit" class="mt-4 w-full block py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Borrar</button>
            </form>
        </div>
    

    </main>

</x-page-layout>