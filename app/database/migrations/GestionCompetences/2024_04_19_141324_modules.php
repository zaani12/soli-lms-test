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
        Schema::create('Modules', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Description');
            $table->string('masse_horaire');
            $table->unsignedBigInteger('Competences_id');
            $table->foreign('Competences_id')->references('id')->on('Competences')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Modules');
    }
};
