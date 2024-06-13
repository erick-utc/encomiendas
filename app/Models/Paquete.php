<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = [
        "descripcion",
        "peso",
        "tipo",
        "condicion",
        "tamano"
    ];

    public function getRouteKeyName() {
        return 'numero';
    }
}
