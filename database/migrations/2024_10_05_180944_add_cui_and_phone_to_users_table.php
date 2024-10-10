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
        Schema::table('users', function (Blueprint $table) {
            $table->string('cui')->unique()->after('id');   // Añadir la columna `cui` después del campo `id`
            $table->string('phone')->nullable()->after('name'); // Añadir la columna `phone` después del campo `name`
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['cui', 'phone']); // Elimina las columnas en caso de rollback
        });
    }
};
