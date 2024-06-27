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
        Schema::table('rooms', function (Blueprint $table) {
           $table->string('title')->nullable()->after('room_id');
           $table->string('room_banner')->nullable()->after('title');
           $table->boolean('is_wifi')->default(0)->after('last_maintenance');
           $table->boolean('is_car_park')->default(0)->after('is_wifi');
           $table->boolean('is_tv')->default(0)->after('is_cark_park');
           $table->boolean('is_fridge')->default(0)->after('is_tv');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            //
        });
    }
};
