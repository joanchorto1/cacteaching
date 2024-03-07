<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'user_id',
        // Añade aquí otros campos que necesites
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
