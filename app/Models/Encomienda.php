<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encomienda extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordenes',
        'encargado'
    ];

    protected $casts = [
        'ordenes' => 'array'
    ];

    public function getRouteKeyName() {
        return 'numero';
    }

    public static function generateEncomiendarNumber()
    {
        $year = date('Y');
        $month = date('m');
        do {
            // Generar un número de 7 dígitos aleatorio
            $orderNumber = str_pad(mt_rand(0, 9999999), 7, '0', STR_PAD_LEFT);
            $orderNumber = 'E' . $month . $year . $orderNumber;
        } while (self::where('numero', $orderNumber)->exists());

        return $orderNumber;
    }
}
