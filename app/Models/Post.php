<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table='posts';
    protected $fillable = [
        "title",
        "content",
        "slug",
        "category"
    ];

    protected function title(): Attribute {
        return Attribute::make(
            set: function($value) { //al almacenar el titulo sera siempre en minuscula
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value); //al retornar el titulo en el set se hace minuscula, aqui lo que hace es para mostra en el view
            }
        );
    }

    protected function casts():array{
        return [
            'published_at'=>'datetime'
        ];
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
