<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $attributes =["cantidad"=>0];

    protected $casts = [
        'precio_compra' => 'double',
        'precio_venta' => 'double'
    ];

    public function scopeBusqueda($query, $busqueda)
    {
        if($busqueda)
        {
            $query->where("descripcion", "like", "%{$busqueda}%");
        }
    }
}
