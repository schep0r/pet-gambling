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
        Schema::create('reels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->nullable()->index();
            $table->integer('position');
            $table->boolean('is_bonus')->default(false);
            $table->json('values');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reels', function (Blueprint $table) {
            $table->dropForeign('reels_game_id_foreign');
            $table->dropIndex('reels_game_id_foreign');
            $table->dropIfExists();
        });
    }
};
