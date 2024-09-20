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
        Schema::create('items', function (Blueprint $table) {
            $table->id()->primary();
            // $table->foreignId('board_id');
            // $table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');

            $table->foreignId('board_id')->constrained(
                table: 'boards',
                indexName: 'item_board_id'
            )->onDelete('cascade');
            $table->string('title');
            $table->integer('comments')->default(0);

            // $table->foreignId('badge_id')
            //         ->constrained( table: 'badges', indexName: 'item_badge_id')
            //         ->onDelete('cascade');

            $table->foreignId('badge_id')
                ->default(1)
                ->constrained(table: 'badges', indexName: 'item_badge_id')
                ->onDelete('cascade');

            // $table->string('badge_text')->nullable();
            // $table->string('badge')->nullable();
            $table->date('due_date')->default(now());
            $table->integer('attachments')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
