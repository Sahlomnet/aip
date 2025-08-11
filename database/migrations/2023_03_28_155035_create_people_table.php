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
        Schema::create('people', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('position')->nullable();
            $table->string('tel')->nullable();
            $table->string('mail')->nullable();
            // $table->foreignId('placement_id')->nullable();
            // $table->foreignId('location_id')->nullable();
            $table->longText('obs')->nullable();
            $table->timestamps();

            // $table->foreign('placement_id')
            //     ->references('id')
            //     ->on('placements')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            // $table->foreign('location_id')
            //     ->references('id')
            //     ->on('locations')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
