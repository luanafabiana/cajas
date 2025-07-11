<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function empresa()
    {
        return $this->hasMany(Empresa::class);
    }
    //relacion con subdepartamento
    public function subdepartamentos()
    {
        return $this->hasMany(Subdepartamento::class);
    }
}
