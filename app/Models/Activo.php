<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'responsable',
        'costo',
        'estado',
        // Agrega aquí otros campos que deseas permitir en la asignación masiva
    ];

    // Opcional: Si prefieres utilizar asignación protegida (guarded), descomenta la siguiente línea y comenta la propiedad $fillable
    // protected $guarded = [];

    // Resto de la definición del modelo...
}
