<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl dark:text-white">Ordenes</h1>
        <a href="{{route('ordenes.create')}}" class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 inline-block">Crear orden</a>
   
    
        <form class="max-w-screen-xl mx-auto mb-8">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input onkeyup="myFunction()" id="myInput" type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar numero de paquete" required />
                {{-- <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button> --}}
            </div>
        </form>
    
    
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Numero de Orden
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Origen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Destino
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion del paquete
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Costo de la orden
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha de emision
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha de entrega
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Emisor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Destinatario
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ordenes as $ordene)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$ordene->numero}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->origen}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->destino}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->paqueteorden->descripcion}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->valor}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->fechaemision}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->fechaentrega}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->emisororden->nombre}} {{$ordene->emisororden->apellido1}} {{$ordene->emisororden->apellido2}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->destinatarioorden->nombre}} {{$ordene->destinatarioorden->apellido1}} {{$ordene->destinatarioorden->apellido2}}
                        </td>
                        <td class="px-6 py-4">
                            {{$ordene->estado}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('ordenes.show', $ordene)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver Informacion</a>
                            {{-- <a href="{{route('ordenes.edit', $ordene)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a> --}}
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    
        <script>
            function myFunction() {
              // Declare variables
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
    
              console.log(filter);
            
              // Loop through all table rows, and hide those who don't match the search query
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                  txtValue = td.textContent || td.innerText;
    
                  console.log(txtValue);
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
            </script>

        {{ $ordenes->links() }}

    </main>
</x-page-layout>