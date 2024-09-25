<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genero extends Model
{
    use HasFactory;
    protected  $primaryKey = 'cod_genero';

    public function animes(): BelongsToMany
    {
        return $this->belongsToMany(Anime::class, 'anime_generos', 'genero_cod_genero', 'anime_cod_anime');
    }
}
