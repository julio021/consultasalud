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
        // Crear la tabla 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Columna ID autoincremental
            $table->string('cui', 13)->unique();  // CUI con un máximo de 13 caracteres y único
            $table->string('name');  // Nombre del usuario
            $table->string('phone', 20)->nullable();  // Teléfono con un máximo de 20 caracteres (opcional)
            $table->string('email')->unique();  // Correo único
            $table->timestamp('email_verified_at')->nullable();  // Marca de tiempo para verificación de email
            $table->string('password');  // Contraseña del usuario
            $table->rememberToken();  // Token de "remember me"
            $table->timestamps();  // Marca de tiempo 'created_at' y 'updated_at'
        });

        // Crear la tabla 'password_reset_tokens' para gestionar el restablecimiento de contraseñas
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();  // Email como clave primaria
            $table->string('token');  // Token de restablecimiento
            $table->timestamp('created_at')->nullable();  // Marca de tiempo de creación del token
        });

        // Crear la tabla 'sessions' para las sesiones del usuario
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();  // ID de sesión como clave primaria
            $table->foreignId('user_id')->nullable()->index();  // ID del usuario asociado (puede ser nulo)
            $table->string('ip_address', 45)->nullable();  // Dirección IP del usuario
            $table->text('user_agent')->nullable();  // Información del navegador del usuario
            $table->longText('payload');  // Datos de la sesión
            $table->integer('last_activity')->index();  // Última actividad del usuario (tiempo Unix)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Elimina las tablas creadas en orden inverso para evitar conflictos
        Schema::dropIfExists('sessions');  // Primero elimina la tabla de sesiones
        Schema::dropIfExists('password_reset_tokens');  // Luego elimina la tabla de restablecimiento de contraseñas
        Schema::dropIfExists('users');  // Finalmente elimina la tabla de usuarios
    }
};
