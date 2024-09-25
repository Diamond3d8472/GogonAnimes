<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Anime extends Model
{
    use HasFactory;
    protected  $primaryKey = 'cod_anime';

    public function temporadas(): HasMany
    {
        return $this->hasMany(Temporada::class);
    }

    public function generos(): BelongsToMany
    {
        return $this->belongsToMany(Genero::class, 'anime_generos', 'anime_cod_anime', 'genero_cod_genero');
    }

    public function favoritos(): HasMany
    {
        return $this->hasMany(Favorito::class);
    }

}
