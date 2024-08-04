<x-page-layout>

    @if ($errors->any())
        <div class="max-w-md mx-auto">
            <h2 class="mb-2 text-lg font-semibold text-gray-900">Errores:</h2>
            <ul class="max-w-md space-y-1 text-gray-500 list-inside">
    
                @foreach ($errors->all() as $error)
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 me-2 text-red-500 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
     
    @endif
    
    <form class="max-w-md mx-auto" method="POST" action="{{route('encomiendas.update', $encomienda)}}">
        @csrf

        @method('PUT')
    
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" value="{{$encomienda->encargado}}" name="encargado" id="encargado" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="encargado" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Encargado:</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="ordenes" ass="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ordenes:</label>
            <select id="ordenes" multiple value="{{json_encode($encomienda->ordenes)}}" name="ordenes[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{-- <option>Ordenes:</option> --}}
                @foreach ($ordenes as $orden)
                    @foreach($encomienda->ordenes as $selectedOrden)
                        @if($selectedOrden == $orden->numero)
                            <option value="{{$orden->numero}}" selected>{{$orden->numero}}</option>  
                        @else
                            <option value="{{$orden->numero}}" >{{$orden->numero}}</option>
                        @endif
                    @endforeach
                @endforeach
            </select>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="estado" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Estado:</label>
            <select id="estado" value="{{$encomienda->orders[0]->estado}}" name="estado" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option disabled>Estado:</option>
                <option value="Creado" @if ($encomienda->orders[0]->estado === "Creado") selected @endif>Creado</option>
                <option value="EnCamino" @if ($encomienda->orders[0]->estado === "EnCamino") selected @endif>En Camino</option>
                <option value="EnDestino" @if ($encomienda->orders[0]->estado === "EnDestino") selected @endif>En Destino</option>
                <option value="Entregado" @if ($encomienda->orders[0]->estado === "Entregado") selected @endif>Entregado a Destinatario</option>
            </select>
        </div>

        <button id="crear" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Actualizar</button>
        <a href="{{route('encomiendas.show', $encomienda)}}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Cancelar</a>
        <div role="status" id="loading" class='hidden'>
            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </form>
      
    <script>
        const submit = document.getElementById('crear');
        const loading = document.getElementById('loading');
        const form = document.querySelector('form');
    
        if(submit) {
            submit.addEventListener('click', () => {
                if(loading) {
                    loading.classList.remove('hidden');
                    submit.setAttribute('disabled', 'disabled');
                    form.submit();
                }
                
            });
        }
      </script>
    </x-page-layout>