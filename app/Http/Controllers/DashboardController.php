<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Paquete;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Ordene;
use App\Models\Encomienda;

class DashboardController extends Controller
{
    function index() {

        $usuarios = Usuario::all();

        $peso_promedio = Paquete::average('peso');
        $valor_promedio = Ordene::average('valor');
        $valor_total = Ordene::sum('valor');
        $total_paquetes = Paquete::count();
        $total_ordenes = Ordene::count();
        $total_usuarios = Usuario::count();
        $total_encomiendas = Encomienda::count();


        $sumas_paquetes_por_tipo = Paquete::groupBy('tipo')
            ->selectRaw('count(tipo) as cuenta, tipo')
            ->pluck('cuenta', 'tipo');

        $usuarios_por_mes = Usuario::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->get();

        $paquetes_por_mes = Paquete::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->get();

        $ordenes_por_mes = Ordene::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->get();

        $encomiendas_por_mes = Encomienda::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->get();

        $data = [
            'peso_promedio'=> $peso_promedio,
            'valor_promedio'=> $valor_promedio,
            'valor_total'=>$valor_total,
            'total_paquetes'=>$total_paquetes,
            'total_ordenes'=>$total_ordenes,
            'total_usuarios'=>$total_usuarios,
            'total_encomiendas'=>$total_encomiendas,
            'suma_paquetes_por_tipo'=>$sumas_paquetes_por_tipo,
            'usuarios_por_mes'=>$usuarios_por_mes,
            'paquetes_por_mes'=>$paquetes_por_mes,
            'ordenes_por_mes'=>$ordenes_por_mes,
            'encomiendas_por_mes'=>$encomiendas_por_mes,
        ];

        return view('dashboard', compact('data'));
        // return $data;
    }
}
