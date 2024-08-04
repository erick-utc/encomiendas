<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrdenUpdatedMail;
use App\Models\Encomienda;
use App\Models\Ordene;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

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
        $encomienda->orders = Ordene::where('numero', $encomienda->ordenes)->get();
        $ordenes = Ordene::all();
        return view('encomiendas.edit', compact('encomienda', 'ordenes'));
    }

    public function update(Request $request, Encomienda $encomienda) {
        $encomienda ->update($request->all());

        foreach($encomienda->ordenes as $numeroOrden) {
            $busqueda = Ordene::where('numero', $numeroOrden)->get();
            $orderActualizar = $busqueda[0];
            $orderActualizar->update(['estado'=>$request->estado]);

            $qr_code = QrCode::create(route('ordenes.show', $orderActualizar));

            $writer = new PngWriter();

            $result = $writer->write($qr_code);

            $result->saveToFile(public_path('/storage/'.'/qrcode'.$orderActualizar->numero.'.png'));

            $orderActualizar->img = $result->getDataUri();

            Mail::to($orderActualizar->emisororden->email)->send(new OrdenUpdatedMail($orderActualizar));
            Mail::to($orderActualizar->destinatarioorden->email)->send(new OrdenUpdatedMail($orderActualizar));
        }

        $ordenes = Ordene::where('numero', $encomienda->ordenes)->get();

        
        return redirect()->route("encomiendas.show", compact("encomienda", "ordenes"));
        // return $encomienda->ordenes;
    }

    public function destroy(Encomienda $encomienda) {
        $encomienda->delete();

        return redirect()->route("ordenes.index");
    }
}
