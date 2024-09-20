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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id()->startingValue(1000);
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->nullable();
            $table->string('plan')->nullable();
            $table->date('active_plan')->nullable();
            $table->string('billing')->nullable();
            $table->string('status')->nullable();
            $table->string('contact')->nullable();
            $table->string('country')->nullable();
            $table->integer('order')->nullable();
            $table->integer('total_spent')->nullable();
            $table->integer('balance')->nullable();
            $table->string('address')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
