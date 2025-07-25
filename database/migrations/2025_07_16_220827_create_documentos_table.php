<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            
            $table->string("nombre", 50);
            $table->string("detallefileweb");
            $table->string("detalle1");
            
            $table->unsignedBigInteger("empresa_id");
            $table->foreign("empresa_id")->references("id")->on("empresas");

            $table->unsignedBigInteger("tipodocumento_id");
            $table->foreign("tipodocumento_id")->references("id")->on("tipodocumentos");

            $table->unsignedBigInteger("caja_id");
            $table->foreign("caja_id")->references("id")->on ("cajas");

            $table->unsignedBigInteger("agencia_id");
            $table->foreign("agencia_id")->references("id")->on ("agencias");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
