<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',       // ID del usuario que creó el CV
        'nombre',        // Nombre del propietario del CV
        'email',         // Email del propietario
        'educacion',     // Información sobre la educación
        'experiencia',   // Experiencia laboral
        'habilidades',   // Habilidades adquiridas
        'idiomas',       // Idiomas conocidos
    ];

    // Relación: un CV pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
