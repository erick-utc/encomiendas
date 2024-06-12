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
        "email"
    ];
}
