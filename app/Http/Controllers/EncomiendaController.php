<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encomienda;
use App\Models\Ordene;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EncomiendaController extends Controller
{
    public function index() {
        $encomiendas = Encomienda::orderBy("created_at", "desc")->paginate(10);

        foreach($encomiendas as $encomienda) {
            $encomienda->orders = Ordene::where('numero', $encomienda->ordenes)->get();
            // $encomienda->orders = $encomienda->ordenes; 
            // Log::debug($encomienda->ordenes);
        }

        return view('encomiendas.index', compact('encomiendas'));
        // return $encomiendas;
    }

    public function create() {
        $ordenes = Ordene::all();

        return view('encomiendas.create', compact('ordenes'));
    }

    public function store(Request $request) {
        $enc = new Encomienda();
        $enc->fill($request->all());

        $enc->numero = Encomienda::generateEncomiendarNumber();

        $enc->save();

        return redirect()->route("encomiendas.index");
    }

    public function show(Encomienda $encomienda) {

        // $ordene = Ordene::with(['emisororden', 'destinatarioorden', 'paqueteorden'])->findOrFail($ordene->id);
        $ordenes = Ordene::where('numero', $encomienda->ordenes)->get();

        return view("encomiendas.show", compact("encomienda", "ordenes"));
    }

    public function edit(Encomienda $encomienda) {
        $ordenes = Ordene::all();
        return view('encomiendas.edit', compact('encomienda', 'ordenes'));
    }

    public function update(Request $request, Encomienda $encomienda) {
        $encomienda ->update($request->all());

        $ordenes = Ordene::where('numero', $encomienda->ordenes)->get();

        // $qr_code = QrCode::create(route('ordenes.show', $ordene));

        // $writer = new PngWriter();

        // $result = $writer->write($qr_code);

        // $ordene->img = $result->getDataUri();

        // Mail::to($ordene->emisororden->email)->send(new OrdenCreateMail($ordene));
        // Mail::to($ordene->destinatarioorden->email)->send(new OrdenCreateMail($ordene));
        
    
        return redirect()->route("encomiendas.show", compact("encomienda", "ordenes"));
    }

    public function destroy(Encomienda $encomienda) {
        $encomienda->delete();

        return redirect()->route("ordenes.index");
    }
}
