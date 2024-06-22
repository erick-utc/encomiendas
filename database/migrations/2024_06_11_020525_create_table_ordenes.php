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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();

            $table->string('origen')->nullable(false);
            $table->string('destino')->nullable(false);
            $table->string('valor');
            $table->string('fechaemision')->nullable(false);
            $table->string('fechaentrega')->nullable();
            $table->string('estado')->nullable(false);
            $table->string('numero')->nullable(false);

            $table->unsignedBigInteger('paquete');
            $table->unsignedBigInteger('emisor');
            $table->unsignedBigInteger('destinatario');

            $table->foreign('paquete')->references('id')->on('paquetes');
            $table->foreign('emisor')->references('id')->on('usuarios');
            $table->foreign('destinatario')->references('id')->on('usuarios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes');
    }
};
