<x-page-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hola: {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                Dashboard information
                <div class="flex flex-wrap">
                    <div class="md:w-1/2 lg:w-1/4">
                        {{-- <x-grafico-circular/> --}}
                        <x-grafico-barras tipo="usuarios"/>
                    </div> 
                    <div class="md:w-1/2 lg:w-1/4">
                        <x-grafico-barras tipo="paquetes"/>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4">
                        <x-grafico-barras tipo="ordenes"/>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4">
                        <x-grafico-barras tipo="encomiendas"/>
                    </div>

                    <x-data-indicator title="total de Usuarios" count="{{$data['total_usuarios']}}" />
                    <x-data-indicator title="total de Paquetes" count="{{$data['total_paquetes']}}" />
                    <x-data-indicator title="total de Ordenes" count="{{$data['total_ordenes']}}" />
                    <x-data-indicator title="total de Encomiendas" count="{{$data['total_encomiendas']}}" />
                    <x-data-indicator title="Peso promedio por paquete" count="{{$data['peso_promedio']}}" />
                    <x-data-indicator title="Ingreso promedio de Orden" count="{{$data['valor_promedio']}}" />
                    <x-data-indicator title="Ingreso total Ordenes" count="{{$data['valor_total']}}" />
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
    <script>
        window.dashboardData = @json($data);
    </script>
</x-app-layout>
</x-page-layout>
