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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('car_type');  // Car type (e.g., SUV, Sedan)
            $table->string('brand');  // Car brand (e.g., BMW, Toyota)
            $table->string('name');  // Car name (e.g., BMW X5)
            $table->string('model');  // Car model (e.g., X5)
            $table->integer('year');  // Year of manufacture
            $table->decimal('daily_rent_price', 8, 2);  // Daily rent price in decimal format
            $table->boolean('availability')->default(true);  // Availability status 
            $table->string('image')->nullable(); 
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
