<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "apellido1",
        "apellido2",
        "cedula",
        "telefono",
        "email",
        "thumbnail"
    ];

    public function getRouteKeyName() {
        return 'cedula';
    }

    public function ordenesEmisor() {
        return $this->hasMany(Ordene::class,'emisor');
    }

    public function ordenesDestinatario(){
        return $this->hasMany(Ordene::class,'destinatario');
    }
}
