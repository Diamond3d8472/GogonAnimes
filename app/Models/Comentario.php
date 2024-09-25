<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comentario extends Model
{
    use HasFactory;
    protected  $primaryKey = 'cod_comentario';

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_cod_user', 'cod_user');
    }
}
