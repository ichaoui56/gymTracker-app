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
        Schema::create('benefits_classe', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('classe_id');
            $table->bigInteger('benefit_id');
            $table->timestamps();

            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('benefit_id')->references('id')->on('benefits')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefits_classe');
    }
};
