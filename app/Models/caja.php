<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Caja extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the caja
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class);
    }
}
