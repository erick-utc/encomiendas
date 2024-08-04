<div class="flex max-w-[400px] w-full flex-col">
    <h2 class="text-3xl font-bold dark:text-white text-center uppercase">{{$attributes->get('tipo')}}</h2>
    <canvas id="barras{{$attributes->get('tipo')}}" data-tipo={{$attributes->get('tipo')}}></canvas>
</div>

<script>
    window.addEventListener('load', ()=>{
        const id = 'barras'.concat(@json($attributes->get('tipo')));
        const canvas = document.getElementById(id);

        if(canvas) {
            const tipo = canvas.dataset.tipo;
            let dataModel = window.dashboardData;
            let dataArray = [];
            let label = '';
            let backgroundColor = 'black';

            switch(tipo){
                case 'usuarios':
                    dataArray = dataModel['usuarios_por_mes'];
                    label = 'Usuarios por mes';
                    backgroundColor = 'blue';
                break;
                case 'paquetes':
                    dataArray = dataModel['paquetes_por_mes'];
                    label = 'Paquetes por mes';
                    backgroundColor = 'red';
                break;
                case 'ordenes':
                    dataArray = dataModel['ordenes_por_mes'];
                    label = 'Ordenes por mes';
                    backgroundColor = 'orange';
                break;
                case 'encomiendas':
                    dataArray = dataModel['encomiendas_por_mes'];
                    label = 'Encomiendas por mes';
                    backgroundColor = 'green';
                break;
                default:
                    dataArray = [];
                    label='';
                    backgroundColor = 'black';
            }

            const labels = dataArray.map(el => `${el.month} ${el.year}`);
            const values = dataArray.map(el => el.data);

            const data = {
                labels,
                datasets: [{
                    label,
                    data: values,
                    backgroundColor,
                    hoverOffset: 4
                }]
            };

            const config = {
            type: 'bar',
            data
        };

            new Chart(canvas, config);
        }
    })
</script>