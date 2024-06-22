<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordene extends Model
{
    use HasFactory;

    protected $fillable = [
        'origen',
        'destino',
        'valor',
        'fechaemision',
        'fechaentrega',
        'paquete',
        'estado',
        'emisor',
        'destinatario'
    ];

    // protected function casts():array{
    //     return [
    //         'fechaemision'=>'datetime',
    //         'fechaentrega'=>'datetime'
    //     ];
    // }

    protected $attributes = [
        'fechaentrega'=> 'null',
    ];

    public function getRouteKeyName() {
        return 'numero';
    }

    public static function generateOrderNumber()
    {
        do {
            // Generar un número de 7 dígitos aleatorio
            $orderNumber = str_pad(mt_rand(0, 9999999), 7, '0', STR_PAD_LEFT);
        } while (self::where('numero', $orderNumber)->exists());

        return $orderNumber;
    }

    public function destinatarioorden() {
        return $this->belongsTo(Usuario::class, 'destinatario','id', 'destinatarioorden');
    }

    public function emisororden() {
        return $this->belongsTo(Usuario::class, 'emisor', 'id', 'emisororden');
    }

    public function paqueteorden() {
        return $this->belongsTo(Paquete::class, 'paquete');
    }
}
