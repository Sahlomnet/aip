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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('short_name')->nullable();
            $table->string('business_name')->nullable();
            $table->string('rfc')->nullable();
            $table->string('tax_regime')->nullable();
            $table->string('street')->nullable();
            $table->string('ext_number')->nullable();
            $table->string('int_number')->nullable();
            $table->string('col')->nullable();
            $table->string('city')->nullable();
            $table->string('mun')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->integer('zip_code')->nullable();
            $table->longText('obs')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
