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
        Schema::create('costumers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dni')->unique();
            $table->string('name_costumer', 50);
            $table->string('lastname_costumer', 50);
            $table->date('birth_date');
            $table->string('gender', 25);
            $table->bigInteger('phone');
            $table->string('address', 50);
            $table->string('email', 50)->unique();
            $table->foreignId('id_origin')->constrained('origins', 'id')->onDelete('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumers');
    }
};
