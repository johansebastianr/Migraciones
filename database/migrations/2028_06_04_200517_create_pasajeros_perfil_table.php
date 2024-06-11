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
        Schema::create('pasajeros_perfil', function (Blueprint $table) {
            $table->id();
            $table->string('username',100);
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->float('telefono',10);
            $table->string('dirección');
            $table->string('correo',80);
            $table->date('fechaNacimiento');
            $table->string('cedula',15);
            $table->string('nacionalidad',100);
            $table->string('departamento',50);
            $table->string('expedicionCedula',100);
            $table->string('genero',10);
            $table->timestamps();

            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasajeros_perfil');
    }
};
