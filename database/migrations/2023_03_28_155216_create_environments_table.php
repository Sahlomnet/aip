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
        Schema::create('environments', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('domain_group')->nullable();
            $table->string('user')->nullable();
            $table->string('password')->nullable();
            $table->integer('rdp_port')->nullable();
            $table->foreignId('asset_id')->nullable();
            $table->longText('obs')->nullable();
            $table->timestamps();

            $table->foreign('asset_id')
                ->references('id')
                ->on('assets')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('environments');
    }
};
