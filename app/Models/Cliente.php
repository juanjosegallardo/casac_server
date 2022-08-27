<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cliente extends Model
{

    protected $attributes=["deuda"=>0];
    use SoftDeletes;
    use HasFactory;

    public function scopeBusqueda($query, $busqueda)
    {
        if($busqueda)
        {
            return $query->where("nombre", "like" , "%{$busqueda}%");
        }
    }
}
