<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl">Usuarios</h1>
        <a href="{{route('usuarios.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none inline-block">Crear usuario</a>
   
        <form class="max-w-screen-xl mx-auto mb-8">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input onkeyup="myFunction()" id="myInput" type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar numero de orden" required />
                {{-- <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button> --}}
            </div>
        </form>

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

    </main>
</x-page-layout>