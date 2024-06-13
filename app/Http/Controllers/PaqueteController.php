<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaqueteController extends Controller
{
    public function index() {
        $paquetes = Paquete::orderBy("id","desc")->paginate(10);

        return view("paquetes.index", compact("paquetes"));
    }

    public function create() {
        return view('paquetes.create');
    }

    public function store(Request $request) {
        $paq = new Paquete();
        $paq->fill($request->all());

        $paq->numero = Str::uuid();

        $paq->save();
        // Paquete::create($paq);

        return redirect()->route("paquetes.index");
    }

    public function show(Paquete $paquete) {
        return view('paquetes.show', compact('paquete'));
    }

    public function edit(Paquete $paquete) {
        return view('paquetes.edit', compact('paquete'));
    }

    public function update(Request $request, Paquete $paquete){
        $paquete ->update($request->all());

        return redirect()->route("paquetes.show", $paquete);
    }

    public function destroy(Paquete $paquete) {
        $paquete->delete();

        return redirect()->route("paquetes.index");
    }
}
