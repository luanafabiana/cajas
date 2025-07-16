<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Agencia extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class);
    }
}
