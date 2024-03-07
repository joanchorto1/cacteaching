<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // app/Models/Categoria.php

    protected $fillable = ['nombre'];
    public function series()
    {
        return $this->hasMany(Serie::class);
    }
}
