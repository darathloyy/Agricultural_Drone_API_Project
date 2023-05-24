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
        Schema::create('instructions', function (Blueprint $table) {
            $table->id();
            $table->time('time_start');
            $table->time('time_end');
            $table->string('status');
            $table->string('feedback');
            $table->unsignedBigInteger('drone_id')
                ->foreign('drone_id')
                ->reference('id')
                ->on('drones')
                ->onDelete('cascade');
            $table->unsignedBigInteger('plan_id')
                ->foreign('plan_id')
                ->reference('id')
                ->on('plans')
                ->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructions');
    }
};