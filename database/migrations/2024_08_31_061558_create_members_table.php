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
        Schema::create('members', function (Blueprint $table) {
            $table->id();                     // Auto-increment ID
            // $table->foreignId('item_id');
            // $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            // $table->foreignId('account_id');
            // $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');

            $table->foreignId('item_id')->constrained(
                table: 'items', indexName: 'member_item_id'
            )->onDelete('cascade');
            $table->foreignId('account_id')->constrained(
                table: 'accounts', indexName: 'member_account_id'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
