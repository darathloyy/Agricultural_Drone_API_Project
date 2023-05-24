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
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('farmer_id')
                ->foreign('farmer_id')
                ->reference('id')
                ->on('farmers')
                ->onDelete('cascade');
            $table->unsignedBigInteger('province_id')
                ->foreign('province_id')
                ->reference('id')
                ->on('provinces')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farms');
    }
};
