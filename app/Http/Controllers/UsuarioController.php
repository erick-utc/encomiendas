<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

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
        $request->validate([
            "nombre"=> "required",
            "cedula"=> "required|unique:usuarios",
            "apellido1"=> "required",
            "apellido2" => "required",
            "telefono" => "required",
            "email" => "required" 
        ]);

        $usuario = Usuario::create($request->all());

        return redirect()->route("usuarios.index");
    }

    public function show(Usuario $usuario) {
        return view("usuarios.show", compact("usuario"));
    }

    public function edit(Usuario $usuario) {
        return view("usuarios.edit", compact("usuario"));
    }

    public function update(Request $request, Usuario $usuario) {
        $usuario->update($request->all());

        return redirect()->route("usuarios.show", $usuario);
    }

    public function destroy(Usuario $usuario) {
        $usuario->delete();

        return redirect()->route("usuarios.index");
    }
}
