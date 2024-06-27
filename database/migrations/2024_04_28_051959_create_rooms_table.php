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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();  
            $table->string('room_id')->nullable();
            $table->string('room_type')->nullable();
            $table->string('room_number')->nullable(); 
            $table->string('room_capacity')->nullable(); 
            $table->string('floor')->nullable();  
            $table->string('availability')->nullable();
            $table->string('price_per_night')->nullable();
            $table->string('last_cleaned')->nullable();
            $table->string('last_maintenance')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
