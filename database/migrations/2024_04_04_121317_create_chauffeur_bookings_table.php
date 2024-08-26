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
        Schema::create('chauffeur_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('chauffer_id');
            $table->string('p_location');
            $table->string('destination');
            $table->string('vehicle_type');
            $table->string('date_time');
            $table->string('no_pass');
            $table->string('contact');
            $table->string('payment_method');
            $table->string('s_instructions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chauffeur_bookings');
    }
};
