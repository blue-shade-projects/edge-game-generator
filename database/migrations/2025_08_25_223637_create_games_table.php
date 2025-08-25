<?php

use App\Enums\GameStatus;
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
            $table->string('uuid', 50)->unique();
            $table->foreignId('game_header_id')->constrained('game_headers');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('assigned_to')->nullable()->constrained('users');
            $table->smallInteger('status')->default(GameStatus::NEW);
            $table->integer('edge_count')->default(0);
            $table->integer('time_passed')->default(0);
            $table->boolean('orgasm_occurred')->default(false);
            $table->boolean('ruin_occurred')->default(false);

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
