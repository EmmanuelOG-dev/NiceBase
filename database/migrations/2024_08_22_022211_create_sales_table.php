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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_motorcycle')->constrained('motorcycles', 'id')->onDelete('no action');
            $table->foreignId('id_seller')->constrained('sellers','id')->onDelete('no action');
            $table->foreignId('id_costumer')->constrained('costumers','id')->onDelete('no action');
            $table->foreignId('id_status')->constrained('statuses','id')->onDelete('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
