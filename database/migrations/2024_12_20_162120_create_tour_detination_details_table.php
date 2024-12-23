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
        Schema::create('tour_detination_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_id');
            $table->unsignedBigInteger('tour_id');
            $table->timestamps();

            $table->foreign('destination_id')->references('id')->on('destinations');
            $table->foreign('tour_id')->references('id')->on('tours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_detination_details');
    }
};
