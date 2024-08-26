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
        Schema::create('car_rentals', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('transmission');
            $table->string('displacement');
            $table->string('plate');
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('sitter');
            $table->string('location');
            $table->string('image_name');
            $table->integer('exp_price');
            $table->integer('rental_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_rentals');
    }
};
