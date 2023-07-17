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
        Schema::create('games', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                    ->default(1)
                    ->constrained(table:'categories')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('team1_id')
                    ->constrained(table:'teams')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('team2_id')
                    ->constrained(table:'teams')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->string('game_winner')->default(0);
            $table->dateTime('game_date')->default(now());
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
