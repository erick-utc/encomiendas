<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = Usuario::orderBy("nombre","desc")
        ->paginate(10);

        return view("usuarios.index", compact("usuarios"));
    }

    public function create() {
        return view("usuarios.create");
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "nombre"=> "required",
            "cedula"=> "required|unique:usuarios",
            "apellido1"=> "required",
            "apellido2" => "required",
            "telefono" => "required",
            "email" => "required",
            'thumbnail' => 'required|image' 
        ]);

        $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails');

        $usuario = Usuario::create($validated);

        return redirect()->route("usuarios.index");
    }

    public function show(Usuario $usuario) {
        return view("usuarios.show", compact("usuario"));
    }

    public function edit(Usuario $usuario) {
        return view("usuarios.edit", compact("usuario"));
    }

    public function update(Request $request, Usuario $usuario) {
        $validated = $request->validate([
            'thumbnail'=> 'file'
        ]);

        if($request->hasFile('thumbnail')) {
            File::delete(storage_path('app/public' . $usuario->thumbnail));
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        $usuario->update($validated);

        return redirect()->route("usuarios.show", $usuario);
    }

    public function destroy(Usuario $usuario) {
        File::delete(storage_path('app/public' . $usuario->thumbnail));
        $usuario->delete();

        return redirect()->route("usuarios.index");
    }
}
