<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Temporada extends Model
{
    use HasFactory;
    protected  $primaryKey = 'cod_temporada';
    protected $fillable = ['anime_cod_anime', 'num_temporada', 'descricao'];

    public function episodios(): HasMany
    {
        return $this->hasMany(Episodio::class, 'temporada_cod_temporada');
    }

    public function anime(): BelongsTo
    {
        return $this->belongsTo(Anime::class, 'anime_cod_anime', 'cod_anime');
    }
}
