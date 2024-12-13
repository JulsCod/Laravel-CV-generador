<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('cvs', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Relación con el usuario
        $table->string('nombre');             // Nombre del propietario del CV
        $table->string('email');              // Email del propietario
        $table->text('educacion');            // Información sobre la educación
        $table->text('experiencia');          // Experiencia laboral
        $table->text('habilidades');          // Habilidades adquiridas
        $table->text('idiomas');              // Idiomas conocidos
        $table->timestamps();                 // Timestamps (created_at, updated_at)

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_v_s');
    }
};
