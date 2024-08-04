<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrdenCreateMail;
use App\Mail\OrdenUpdatedMail;
use App\Models\Ordene;
use App\Models\Paquete;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class OrdeneController extends Controller
{
    public function index() {
        $ordenes = Ordene::orderBy("created_at","desc")->paginate(10);

        return view("ordenes.index", compact("ordenes"));
    }

    public function create() {
        $usuarios = Usuario::all();
        $paquetes = Paquete::all();

        return view("ordenes.create", compact("usuarios","paquetes"));
    }

    public function store(Request $request) {
        $ord = new Ordene();
        $ord->fill($request->all());

        $ord->numero = Ordene::generateOrderNumber();
        $ord->fechaentrega = $request->fechaemision;

        $ord->save();

        $qr_code = QrCode::create(route('ordenes.show', $ord));

        $writer = new PngWriter();

        $result = $writer->write($qr_code);

        $ord->img = $result->getDataUri();

        Mail::to($ord->emisororden->email)->send(new OrdenCreateMail($ord));
        Mail::to($ord->destinatarioorden->email)->send(new OrdenCreateMail($ord));
        // Paquete::create($paq);

        return redirect()->route("ordenes.index");
    }

    public function show(Ordene $ordene) {

        // $ordene = Ordene::with(['emisororden', 'destinatarioorden', 'paqueteorden'])->findOrFail($ordene->id);

        return view("ordenes.show", compact("ordene"));
    }

    public function edit(Ordene $ordene) {
        $usuarios = Usuario::all();
        $paquetes = Paquete::all();
        return view('ordenes.edit', compact('ordene', 'paquetes', 'usuarios'));
    }

    public function update(Request $request, Ordene $ordene) {
        $ordene ->update($request->all());

        $qr_code = QrCode::create(route('ordenes.show', $ordene));

        $writer = new PngWriter();

        $result = $writer->write($qr_code);

        $ordene->img = $result->getDataUri();

        Mail::to($ordene->emisororden->email)->send(new OrdenCreateMail($ordene));
        Mail::to($ordene->destinatarioorden->email)->send(new OrdenCreateMail($ordene));
        
    
        return redirect()->route("ordenes.show", $ordene);
    }

    public function destroy(Ordene $ordene) {
        $ordene->delete();

        return redirect()->route("ordenes.index");
    }

    public function tracking(Ordene $ordene) {

        return view('ordenes.tracking', compact('ordene'));
    }
}
