<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venta;

class Venta extends Model
{

    //id, total, created_at, ultimo_pago, tipo, cliente_id, saldos, abono, enganche
    use HasFactory;
    public function productos()
    {
        return $this->belongsToMany();
    }


}
