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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('image')->nullable();
            $table->enum('position', [
                'Goalkeeper_(GK)',
                'Center-back_(CB)',
                'Full-back_left_(LB)',
                'Full-back_right_(RB)',
                'Defensive midfielder_(CDM)',
                'Central midfielder_(CM)',
                'Attacking midfielder_(CAM)',
                'Winger_left_(LW)',
                'Winger_right_(RW)',
                'Striker_(ST)',
                'Striker_(CF)'
            ]);
            $table->string('nif')->unique();
            
            $table->foreignId('team_id')
                ->constrained('teams')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};

