<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subdepartamento extends Model
{
    use HasFactory;
    /**
     * Get the departamento that owns the subdepartamento
     *
     * @return \Illuminate\Departamentobase\Eloquent\Relations\BelongsTo
     */
    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }
}
