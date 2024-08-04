<div class="flex max-w-[400px] w-full flex-col">
    <h2 class="text-3xl font-bold dark:text-white text-center">Nuevos Usuarios por Mes</h2>
    <canvas id="circular"></canvas>
</div>

<script>
    window.addEventListener('load', ()=>{
        const data = {
            labels: [
                'Julio',
                'Agosto'
            ],
            datasets: [{
                label: 'Nuevos clientes por mes',
                data: [2, 1],
                backgroundColor: [
                'red',
                'blue',
                // 'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'pie',
            data: data,
        };

        const canvas = document.getElementById('circular');

        if(canvas) {
            new Chart(canvas, config);
        }
    })
</script>