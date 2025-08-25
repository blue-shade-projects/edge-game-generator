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
        Schema::create('game_headers', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 50)->unique();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->smallInteger('mode');
            $table->integer('edge_condition')->nullable();
            $table->integer('time_condition')->nullable();
            $table->integer('edge_target')->nullable();
            $table->integer('time_target')->nullable();
            $table->integer('edge_pause')->nullable();
            $table->boolean('use_random_pause')->default(false);
            $table->integer('pause_min')->nullable();
            $table->integer('pause_max')->nullable();
            $table->boolean('orgasm_allowed')->default(false);
            $table->integer('orgasm_chance')->nullable();
            $table->boolean('use_ruin_chance')->default(false);
            $table->integer('ruin_chance')->nullable();
            $table->boolean('hide_progressbar')->default(false);
            $table->boolean('pausing_allowed')->default(false);
            $table->boolean('is_private')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_headers');
    }
};
