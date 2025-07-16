<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function agencias()
    {
        return $this->hasMany(Agencia::class);
    }

    //relacion con departamento
    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }


}
