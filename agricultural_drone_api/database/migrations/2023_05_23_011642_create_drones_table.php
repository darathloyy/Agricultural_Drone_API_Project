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
        Schema::create('drones', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('manufacturer');
            $table->string('payload');
            $table->integer('price');
            $table->unsignedBigInteger('type_drone_id')
                ->foreign('type_drone_id')
                ->reference('id')
                ->on('type_drones');
            $table->unsignedBigInteger('location_id')
                ->foreign('location_id')
                ->reference('id')
                ->on('locations');
            $table->unsignedBigInteger('farmer_id')
                ->foreign('farmer_id')
                ->reference('id')
                ->on('farmers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drones');
    }
};
