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
        Schema::create('conductores_perfil', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('cedula',20);
            $table->string('correo',100);
            $table->string('licencia',50);
            $table->string('direccion',100);
            $table->string('telefono',15);
            $table->string('preferencia',20);
            $table->date('fechaNacimiento',10);
            $table->string('nacionalidad',100);
            $table->string('departamento',50);
            $table->string('expedicionCedula',100);
            $table->string('genero',10);
            $table->timestamps();

            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('vehiculos_id');
            $table->foreign('vehiculos_id')->references('id')->on('vehiculos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conductores_perfil');
    }
};
