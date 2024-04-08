<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    // app/Models/Serie.php

    protected $fillable = ['titulo', 'descripcion', 'categoria_id', 'imagen'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

}
