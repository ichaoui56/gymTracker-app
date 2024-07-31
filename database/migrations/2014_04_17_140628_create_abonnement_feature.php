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
        Schema::create('abonnement_feature', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('feature_id');
            $table->bigInteger('abonnement_id');

            $table->foreign('feature_id')->references('id')->on('features');
            $table->foreign('abonnement_id')->references('id')->on('abonnements');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnement_classe');
    }
};
