{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    
</body>
</html> --}}

<x-page-layout>
    

    <main>
        {{-- Hero --}}
        <section class="bg-center bg-no-repeat bg-[url('https://2.bp.blogspot.com/_wAqhsSPH374/TI5Lg4nmy2I/AAAAAAAAAW8/Xsy_Va0Gock/s1600/AB-5304.jpg')] bg-gray-700 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Encomiendas</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Transportamos tu sueños</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#servicios" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Ver mas
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="#about" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Aprede mas
                    </a>  
                </div>
            </div>
        </section>
        {{-- End Hero --}}

        {{-- Servicios --}}
        
        <section id="servicios" class="max-w-[1200px] mx-auto my-10">
            <h2 class="text-4xl font-extrabold dark:text-white mb-6">Nuestro Servicios</h2>
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Transporte Publico</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Encomiendas</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Servicios Privados</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Alianzas con terceros</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">El servicio de transporte público es una columna vertebral esencial en la infraestructura de cualquier ciudad moderna. Proporciona una solución económica, eficiente y sostenible para la movilidad de millones de personas cada día. Los sistemas de transporte público, que incluyen autobuses, trenes, tranvías y metros, están diseñados para conectar a las personas con sus destinos, ya sea para ir al trabajo, a la escuela, a realizar compras o simplemente para explorar la ciudad.</p>
    
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Una de las principales ventajas del transporte público es su capacidad para reducir el tráfico y la congestión en las calles. Al disminuir el número de vehículos privados en la carretera, se mejora el flujo de tráfico, se reducen los tiempos de desplazamiento y se minimiza el estrés de los conductores. Además, menos automóviles en las carreteras significan menos emisiones de gases contaminantes, lo que contribuye a un aire más limpio y a la reducción de la huella de carbono de la ciudad.</p>
                    
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">El transporte público también juega un papel crucial en la equidad social. Proporciona una opción de movilidad accesible para personas de todas las edades y niveles socioeconómicos, incluidos aquellos que no pueden permitirse un vehículo privado. Esto incluye estudiantes, personas mayores, individuos con discapacidades y aquellos con ingresos limitados. Al ofrecer tarifas asequibles y rutas accesibles, el transporte público ayuda a garantizar que todos los miembros de la comunidad tengan las mismas oportunidades para acceder a trabajos, educación y servicios esenciales.</p>
                    
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">La eficiencia del transporte público se ve reforzada por el uso de tecnologías avanzadas y la planificación urbana inteligente. Los sistemas de pago sin contacto, las aplicaciones de seguimiento en tiempo real y las rutas optimizadas son solo algunas de las innovaciones que mejoran la experiencia del usuario. Estas tecnologías permiten a los pasajeros planificar sus viajes de manera más efectiva, reduciendo tiempos de espera y mejorando la puntualidad y la fiabilidad del servicio.</p>
                    
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Además, el transporte público fomenta un estilo de vida más saludable y activo. Muchas veces, utilizar el transporte público implica caminar o andar en bicicleta hasta las estaciones o paradas, lo que promueve la actividad física regular. También fomenta la interacción social, ya que proporciona espacios comunes donde las personas pueden encontrarse y comunicarse, fortaleciendo el sentido de comunidad.</p>
                    
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">En conclusión, el transporte público es vital para el funcionamiento eficiente y sostenible de las ciudades modernas. No solo ofrece una solución de movilidad práctica y económica, sino que también contribuye al bienestar ambiental y social de la comunidad. Al seguir invirtiendo en la mejora y expansión de los sistemas de transporte público, podemos crear ciudades más inclusivas, saludables y sostenibles para las generaciones futuras.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Las encomiendas de buses son un servicio de transporte y entrega de paquetería utilizado principalmente en rutas nacionales e internacionales, especialmente en áreas donde el acceso a servicios de mensajería tradicional puede ser limitado o más costoso. Este sistema permite a los pasajeros y clientes enviar paquetes, documentos y otros bienes a diferentes destinos a través de las compañías de transporte de pasajeros.</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">El proceso de envío de encomiendas de buses es generalmente sencillo y accesible. Los clientes llevan sus paquetes a las terminales de autobuses o a puntos de venta autorizados, donde se registran los datos del remitente y el destinatario, junto con la descripción del contenido y el destino del paquete. Los costos del servicio se basan en el peso, las dimensiones del paquete y la distancia a la que se enviará.</p>
                    <h2 class="text-md text-gray-500 dark:text-gray-400 mb-4">Razones de Popularidad</h2>
                    <ul>
                        <li class="text-sm text-gray-500 dark:text-gray-400 mb-4"><strong>Accesibilidad</strong>: Las terminales de autobuses suelen estar ubicadas en el centro de las ciudades y pueblos, lo que facilita el acceso para los clientes.</li>
                        <li class="text-sm text-gray-500 dark:text-gray-400 mb-4"><strong>Costo</strong>: En muchos casos, enviar encomiendas por bus puede ser más económico que utilizar servicios de mensajería exprés.</li>
                        <li class="text-sm text-gray-500 dark:text-gray-400 mb-4"><strong>Cobertura</strong>: Las rutas de autobuses suelen cubrir áreas rurales y urbanas, ofreciendo una amplia red de entrega.</li>
                        <li class="text-sm text-gray-500 dark:text-gray-400 mb-4"><strong>Rapidez</strong>: Aunque no tan rápido como los servicios de mensajería exprés, las encomiendas de buses ofrecen tiempos de entrega relativamente cortos, especialmente en rutas directas.</li>
                    </ul>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">La seguridad y el seguimiento de las encomiendas han mejorado significativamente con el tiempo. Muchas empresas de autobuses ahora ofrecen servicios de seguimiento en línea, lo que permite a los clientes rastrear el estado y la ubicación de sus paquetes en tiempo real.</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Las encomiendas de buses también juegan un papel importante en el comercio local y en la economía informal, ya que permiten a pequeños comerciantes y emprendedores enviar y recibir productos de manera eficiente. Además, en situaciones de emergencia o en áreas afectadas por desastres naturales, este servicio puede ser vital para el transporte de suministros y ayuda humanitaria.</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">En resumen, las encomiendas de buses son un componente esencial del sistema de transporte y logística en muchas regiones, ofreciendo una opción accesible, económica y eficiente para el envío de paquetes y bienes.</p>

                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>
        </section>
        {{-- End Servicios --}}

        {{-- About --}}
        <div id="about" class="w-full max-w-xxl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{Route('about')}}">
                <img class="rounded-t-lg" src="https://wallpapercave.com/wp/wp7641941.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="{{Route('about')}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sistemas de Encomiendas Tuan</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 mb-4">Somos un servicio de encomiendas punto a punto de Grecia a San Jose y viceversa, nos especializamos en el manejo de sus paquetes a bajo costo y con la seguridad que nos caracteriza</p>
                <a href="{{Route('about')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Sobre Nosotros
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        {{-- End About --}}
    </main>
  
</x-page-layout>

{{-- @extends('components.page-layout')

@section('title', 'homepage1')

@push('css')
    <style>
        body {
            background-color: #ccc;
        }
        
    </style>
@endpush

@section('content')
<main class="max-w-4xl mx-auto px-4">
    <h1>homepage</h1>
    <x-alert type="info" class="mb-4">
        <x-slot name="title">
            Title
        </x-slot>
        home page alert
    </x-alert>
    <x-alert2 type="success" class="mb-4">
        <x-slot name="title">
            Title for class component
        </x-slot>
        home page alert
    </x-alert2>
</main>
@endsection --}}