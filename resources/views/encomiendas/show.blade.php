<x-page-layout>
    <main class="p-2 max-w-screen-xl mx-auto">
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl">Encomiendas</h1>
        {{-- <a href="{{route('encomiendas.create')}}" class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none inline-block">Crear encomienda</a> --}}
   
    
        {{-- <form class="max-w-screen-xl mx-auto mb-8">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input onkeyup="myFunction()" id="myInput" type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar numero de encomienda" required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form> --}}
    
    
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Numero de Encomienda
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Encargado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ordenes
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$encomienda->numero}}
                        </td>
                        <td class="px-6 py-4">
                            {{$encomienda->encargado}}
                        </td>
                        <td class="px-6 py-4">
                            <ul>
                            @foreach ($ordenes as $orden)
                                <li>
                                    <a class="font-medium text-blue-600 hover:underline" href="{{route('ordenes.show', $orden)}}">{{$orden->numero}}</a> 
                                </li>
                            @endforeach
                            </ul>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('encomiendas.edit', $encomienda)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Editar</a>
                            {{-- <a href="{{route('encomiendas.edit', $encomienda)}}" class="font-medium text-blue-600 hover:underline">Editar</a> --}}
                            <form action="{{route('encomiendas.destroy', $encomienda)}}" method="POST" class="block w-full">
                                @csrf
                        
                                @method('DELETE')
                                <button type="submit" class="mt-4 w-full block py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Borrar</button>
                            </form>
                        </td>
                    </tr>
                      
                </tbody>
            </table>
        </div>
        <iframe 
                src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251467.43304392885!2d-84.38539160133296!3d10.002098154770156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x8fa058552d4f3b67%3A0xa57a0a1868897d15!2sTerminal%20de%20Buses%20TUAN!3m2!1d10.0745363!2d-84.31191439999999!4m5!1s0x8fa0e358bc41aa1d%3A0xebaf6b1292b290d2!2sWWQ7%2B883%20Terminal%20Buses%20TUAN%20San%20Jos%C3%A9-Grecia%2C%20San%20Jos%C3%A9%2C%20Barrio%20M%C3%A9xico!3m2!1d9.9382568!2d-84.0867169!5e0!3m2!1sen!2scr!4v1720058441302!5m2!1sen!2scr" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                class="mx-auto mt-6" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
    
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