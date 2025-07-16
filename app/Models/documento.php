<?php

namespace App\Models;

use Dom\Document;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documento extends Model
{
    use HasFactory;

    public function tipoDocumento(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class);
    }
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }
    public function caja(): BelongsTo
    {
        return $this->belongsTo(Caja::class);
    }

    public function agencia(): BelongsTo
    {
        return $this->belongsTo(Documento::class);
    }



}
