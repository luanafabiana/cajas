<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Relations\HasOne;

class Tipodocumento extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function documento(): HasOne
    {
        return $this->hasOne(Documento::class);
    }
}
