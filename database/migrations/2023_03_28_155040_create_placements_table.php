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
        Schema::create('placements', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->foreignId('location_id')->nullable();
            $table->foreignId('people_id')->nullable();
            $table->longText('obs')->nullable();
            $table->timestamps();

            $table->foreign('location_id')
                ->references('id')
                ->on('locations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('people_id')
                ->references('id')
                ->on('people')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placements');
    }
};
