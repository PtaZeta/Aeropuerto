<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vuelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo', 'origen', 'destino', 'airline',
        'fecha_salida', 'fecha_llegada', 'plazas_totales', 'precio'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_vuelo')
            ->withPivot('numero_asientos')
            ->withTimestamps();
    }
}
