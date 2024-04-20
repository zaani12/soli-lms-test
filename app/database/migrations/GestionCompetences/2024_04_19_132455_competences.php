<?php
namespace App\Models\GestionCompetences;

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
        Schema::create('Competences', function (Blueprint $table) {
            $table->id();
            $table->string('Code');
            $table->string('Nom');
            $table->string('Description');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Competences');
    }
};