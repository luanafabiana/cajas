<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;

    protected $guarded=[];

    // protected $fillable=[
    //     "agencia",
    //     "empresa_id"
    // ];
    // one to many de uno a muchos
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
