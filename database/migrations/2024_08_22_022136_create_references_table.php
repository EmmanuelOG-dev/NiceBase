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
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->integer('build_year');
            $table->foreignId('id_brand')->constrained('brands', 'id')->onDelete('no action');
            $table->foreignId('id_category')->constrained('categories', 'id')->onDelete('no action');
            $table->integer('engine_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
