<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Caja extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class);
    }
}
