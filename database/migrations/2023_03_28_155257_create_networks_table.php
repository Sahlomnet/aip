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
        Schema::create('networks', function (Blueprint $table) {
            $table->id('id');
            $table->string('type')->nullable();
            $table->string('mac')->nullable();
            $table->string('ip')->nullable();
            $table->foreignId('asset_id')->nullable();
            $table->foreignId('manufacturer_id')->nullable();
            $table->longText('obs')->nullable();
            $table->timestamps();

            $table->foreign('asset_id')
                ->references('id')
                ->on('assets')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('networks');
    }
};
