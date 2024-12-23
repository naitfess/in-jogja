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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('max_capacity');
            $table->string('days');
            $table->string('price');
            $table->string('information');
            $table->string('picture');
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->unsignedBigInteger('transportation_id')->nullable();
            $table->timestamps();

            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('transportation_id')->references('id')->on('transportations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
