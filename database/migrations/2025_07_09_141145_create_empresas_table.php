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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",50);
            $table->string("direccion",100)->nullable();
            $table->string("telefono",15)->nullable();
            $table->string("email",50)->nullable(); 
            $table->string("nit",20)->nullable();
            $table->string("logo",100)->nullable();
            $table->string("color",20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
