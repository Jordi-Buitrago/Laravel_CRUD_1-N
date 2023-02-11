<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelc extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'marca',
        'plazas',
        'potencia',
        'consum',
        'cotxe_id',
    ];

    public function cotxe()
    {
        return $this->belongsTo(Cotxe::class);
    }
}
