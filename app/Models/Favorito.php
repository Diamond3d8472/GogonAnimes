<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorito extends Model
{
    use HasFactory;
    protected  $primaryKey = 'cod_favoritos';

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_cod_user', 'cod_user');
    }

    public function anime(): BelongsTo
    {
        return $this->belongsTo(Anime::class, 'anime_cod_anime', 'cod_anime');
    }
}
