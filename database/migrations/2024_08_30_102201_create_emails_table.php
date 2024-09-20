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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->constrained(
                table: 'users', indexName: 'sender_account_id'
            )->onDelete('cascade');

            $table->foreignId('receiver_id')->constrained(
                table: 'users', indexName: 'receiver_account_id'
            )->onDelete('cascade');

            $table->string('subject');
            $table->string('is_read')->default('false');
            $table->string('is_stared')->default('false');
            $table->string('is_spam')->default('false');
            $table->string('is_draft')->default('false');
            $table->string('is_trash')->default('false');
            $table->string('label')->nullable();
            $table->longText('messages');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
