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
        Schema::create('results', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                    ->default(1)
                    ->constrained(table:'categories')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('team_id')
                    ->constrained(table:'teams')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->integer('goals')->default(0);
            $table->integer('fouls_commited')->default(0);
            $table->integer('fouls_received')->default(0);
            $table->integer('red_cards')->default(0);
            $table->integer('yellow_cards')->default(0);
            $table->integer('match_results')->default(0);
            $table->integer('score')->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
