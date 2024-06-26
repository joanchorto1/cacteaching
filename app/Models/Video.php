<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'video','imagen', 'serie_id'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}

