<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episodio extends Model
{
    use HasFactory;
    protected  $primaryKey = 'cod_episodio';

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class);
    }

    public function temporada(): BelongsTo
    {
        return $this->belongsTo(Temporada::class, 'temporada_cod_temporada', 'cod_temporada');
    }

}
