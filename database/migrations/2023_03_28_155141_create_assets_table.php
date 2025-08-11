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
        Schema::create('assets', function (Blueprint $table) {
            $table->id('id');
            $table->string('cod')->unique();
            $table->string('des')->nullable();
            $table->string('model')->nullable();
            $table->string('serial')->nullable();
            $table->date('last_maintenance_date')->nullable();
            $table->integer('maintenance_frequency')->nullable();
            $table->date('next_maintenance_date')->nullable();



            $table->string('img')->nullable();
            $table->decimal('cost')->nullable();
            $table->date('purchase_date')->nullable();
            $table->string('invoice')->nullable();
            // $table->foreignId('location_id')->nullable();
            $table->foreignId('placement_id')->nullable();
            // $table->foreignId('people_id')->nullable();
            $table->foreignId('status_id')->nullable();
            $table->foreignId('manufacturer_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('usage_id')->nullable();
            $table->longText('obs')->nullable();
            $table->timestamps();

            // $table->foreign('location_id')
            //     ->references('id')
            //     ->on('locations')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->foreign('placement_id')
                ->references('id')
                ->on('placements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            // $table->foreign('people_id')
            //     ->references('id')
            //     ->on('people')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('usage_id')
                ->references('id')
                ->on('usages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
