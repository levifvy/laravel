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

            $table->foreignId('team1_id')
                ->constrained(table:'teams')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('team2_id')
                    ->constrained(table:'teams')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->dateTime('start_time');
            $table->timestamps();

            // $table->unsignedBigInteger('team1_id')->unique();
            // $table->foreign('team1_id')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
             // $table->unsignedBigInteger('team2_id')->unique();
            // $table->foreign('team2_id')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
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
