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
            $table->unsignedBigInteger('type_drone_id');
            $table->foreign('type_drone_id')
                ->reference('id')
                ->on('type_drones')
                ->onDelete('cascade');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')
                ->reference('id')
                ->on('locations')
                ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->reference('id')
                ->on('users')
                ->onDelete('cascade');
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
