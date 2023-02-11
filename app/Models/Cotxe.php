<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Modelc;


class Cotxe extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'model',
        'matricula',
        'color',
        'any',
        'preu',
    ];

    public function modelcs()
    {
        return $this->hasMany(Modelc::class);
    }
}