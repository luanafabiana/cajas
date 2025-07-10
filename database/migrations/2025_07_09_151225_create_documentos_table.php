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
            $table->string("detalle2");
            $table->string("detalle3");
            
            $table->unsignedBigInteger("empresa_id");
            $table->foreign("empresa_id")->references("id")->on("empresas");

            $table->unsignedBigInteger("tipo_documento_id");
            $table->foreign("tipo_documento_id")->references("id")->on("tipo_documentos");

            $table->unsignedBigInteger("caja_id");
            $table->foreign("caja_id")->references("id")->on ("cajas");

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
