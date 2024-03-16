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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('gender')->nullable();
            $table->date('birthdate')->nullable();
            $table->longText('avatar')->nullable();
            $table->decimal('height',4,1)->nullable();
            $table->decimal('weight',4,1)->nullable();
            $table->decimal('target_weight',4,1)->nullable();
            $table->string('introduction', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
