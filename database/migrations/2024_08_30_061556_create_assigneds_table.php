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
        Schema::create('assigneds', function (Blueprint $table) {
            $table->id();
            // $table->string('item_id');
            // $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            $table->foreignId('item_id')->constrained(
                table: 'items', indexName: 'assigned_item_id'
            )->onDelete('cascade');

            $table->string('assigned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigneds');
    }
};
