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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('sku');

            $table->foreignId('category_id')->constrained(
                table: 'categories', indexName: 'product_category_id'
            );

            $table->string('img')->nullable();
            $table->string('company');
            $table->longText('description');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
