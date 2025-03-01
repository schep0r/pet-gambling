<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class ReelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game = Game::first();

        $game->reels()->create([
            'position' => 1,
            'is_bonus' => false,
            'values' => ["P_1", "K", "10", "P_6", "P_5", "P_4", "P_2", "K", "10", "P_5", "P_1", "J", "P_6", "A", "P_4", "10", "9", "Q", "P_2", "P_6", "P_5", "P_1", "10", "9", "J", "SCAT", "Q", "P_6", "P_2", "P_4", "J", "P_1", "A", "9", "P_2", "P_4", "P_3", "Q", "SCAT", "10", "P_6", "K", "J", "P_1", "P_3", "K", "P_5", "A", "P_6", "SCAT", "10", "A", "9", "Q", "10", "P_2", "P_5", "SCAT", "Q", "P_3", "9", "P_6", "P_4", "P_2", "K", "J", "P_6", "A", "P_2", "J", "P_5", "9", "A", "P_2", "P_6", "Q", "P_1", "P_2", "9", "K", "P_4", "P_3", "J", "P_1", "SCAT", "K", "P_3", "P_2", "J", "K", "P_4", "P_1", "Q", "P_6", "P_4", "A", "P_5", "J", "Q", "P_3", "10", "P_1", "P_4", "P_5", "P_3", "J", "K", "A", "9", "10", "P_3", "A", "P_1", "K", "P_3", "9", "P_5", "Q", "P_3", "A", "P_5", "9", "P_4", "10", "Q"],
        ]);

        $game->reels()->create([
            'position' => 2,
            'is_bonus' => false,
            'values' => ["P_2", "P_3", "K", "J", "P_1", "10", "P_6", "P_2", "P_1", "J", "SCAT", "P_5", "P_4", "9", "P_1", "10", "A", "P_5", "K", "Q", "P_2", "P_6", "SCAT", "Q", "A", "P_2", "J", "Q", "P_3", "P_4", "P_2", "SCAT", "P_6", "10", "P_1", "9", "SCAT", "P_6", "P_2", "9", "P_1", "P_6", "P_5", "SCAT", "P_3", "P_2", "P_1", "P_6", "J", "Q", "K", "P_4", "P_3", "10", "P_6", "J", "K", "P_4", "9", "10", "P_3", "A", "P_4", "J", "K", "10", "P_5", "P_4", "A", "P_6", "P_5", "P_2", "P_3", "P_4", "K", "P_6", "J", "P_3", "Q", "9", "K", "P_1", "10", "Q", "9", "P_5", "P_4", "K", "A", "P_5", "9", "Q", "P_3", "K", "P_5", "9", "P_6", "P_2", "A", "10", "P_5", "P_1", "J", "10", "P_5", "A", "9", "P_4", "P_2", "K", "9", "A", "J", "P_4", "10", "P_3", "Q", "A", "P_1", "P_3", "Q", "A", "P_1", "J", "Q"],
        ]);

        $game->reels()->create([
            'position' => 3,
            'is_bonus' => false,
            'values' => ["P_1", "SCAT", "P_5", "J", "A", "10", "9", "J", "P_3", "P_4", "10", "J", "P_2", "P_6", "9", "SCAT", "K", "P_5", "P_2", "P_4", "SCAT", "K", "9", "P_1", "10", "A", "SCAT", "P_5", "P_2", "P_1", "P_3", "P_5", "10", "P_1", "9", "P_6", "10", "P_2", "P_3", "K", "SCAT", "P_1", "Q", "P_6", "P_2", "P_3", "J", "10", "Q", "P_3", "9", "P_2", "10", "P_5", "J", "P_6", "P_1", "P_2", "9", "10", "J", "P_2", "P_4", "A", "Q", "P_6", "10", "P_4", "9", "P_1", "P_6", "A", "Q", "K", "P_6", "A", "9", "P_5", "J", "P_4", "9", "P_1", "Q", "K", "P_4", "P_3", "9", "P_2", "10", "Q", "K", "P_4", "J", "P_2", "P_6", "A", "P_4", "Q", "P_6", "K", "P_5", "P_3", "P_4", "A", "P_5", "K", "P_3", "P_6", "P_5", "Q", "P_1", "A", "P_5", "K", "P_3", "A", "J", "P_4", "P_1", "P_3", "Q", "A", "J", "K", "Q"],
        ]);

        $game->reels()->create([
            'position' => 4,
            'is_bonus' => false,
            'values' => ["J", "9", "P_3", "K", "P_4", "P_2", "SCAT", "P_1", "P_5", "K", "A", "10", "P_2", "K", "SCAT", "Q", "P_6", "10", "SCAT", "J", "A", "Q", "10", "J", "P_6", "P_3", "P_2", "SCAT", "P_4", "P_1", "9", "J", "Q", "P_5", "A", "10", "9", "Q", "P_2", "SCAT", "J", "P_6", "P_5", "P_2", "9", "P_1", "A", "J", "Q", "P_3", "9", "P_5", "P_4", "K", "P_1", "J", "P_4", "Q", "A", "P_1", "P_4", "J", "9", "A", "P_3", "P_5", "10", "Q", "9", "P_5", "A", "K", "10", "P_3", "J", "P_2", "P_5", "P_3", "Q", "P_1", "P_6", "P_5", "Q", "10", "P_2", "K", "P_1", "J", "9", "P_4", "P_1", "P_6", "9", "P_3", "A", "P_6", "9", "10", "Q", "P_3", "P_1", "10", "A", "P_6", "P_4", "P_2", "10", "A", "P_4", "P_1", "P_5", "K", "P_6", "P_3", "P_4", "K", "P_6", "P_2", "P_5", "P_4", "K", "P_6", "P_2", "P_3", "K"],
        ]);

        $game->reels()->create([
            'position' => 5,
            'is_bonus' => false,
            'values' => ["SCAT", "P_1", "P_4", "P_2", "P_6", "10", "P_1", "J", "P_2", "K", "P_6", "P_4", "9", "Q", "P_6", "K", "SCAT", "J", "P_6", "Q", "10", "A", "SCAT", "P_6", "K", "P_4", "9", "J", "10", "Q", "K", "P_1", "9", "P_3", "Q", "SCAT", "A", "P_1", "P_2", "9", "Q", "K", "SCAT", "P_5", "P_3", "J", "9", "P_5", "Q", "P_6", "P_4", "10", "P_1", "A", "P_6", "9", "10", "A", "P_3", "K", "Q", "P_5", "9", "P_1", "P_2", "P_5", "10", "Q", "P_1", "P_5", "J", "K", "P_3", "P_1", "9", "J", "Q", "P_2", "A", "J", "P_1", "9", "A", "P_4", "K", "P_3", "P_2", "Q", "9", "A", "K", "P_1", "P_4", "P_5", "P_3", "P_6", "A", "J", "P_4", "P_5", "10", "J", "K", "P_3", "A", "J", "P_2", "P_5", "P_4", "P_6", "A", "P_5", "P_2", "10", "P_3", "P_5", "P_6", "P_4", "10", "P_2", "P_3", "P_4", "10", "P_2", "P_3"],
        ]);

        $game->reels()->create([
            'position' => '1',
            'is_bonus' => true,
            'values' => ["P_2", "P_1", "P_4", "K", "P_3", "P_5", "10", "P_1", "P_3", "A", "Q", "P_1", "P_6", "9", "SCAT", "P_3", "P_1", "9", "P_4", "P_5", "P_3", "K", "P_6", "J", "P_3", "A", "P_4", "P_1", "P_3", "10", "J", "P_6", "P_5", "K", "10", "A", "9", "P_4", "P_3", "Q", "A", "P_1", "SCAT", "10", "9", "P_4", "P_2", "K", "P_1", "J", "SCAT", "Q", "P_6", "9", "P_1", "Q", "P_2", "A", "P_4", "P_6", "10", "P_2", "9", "P_4", "10", "P_2", "A", "P_6", "P_5", "10", "J", "P_2", "9", "P_6", "K", "10", "P_5", "A", "Q", "J", "P_1", "A", "P_5", "10", "Q", "P_4", "A", "P_5", "P_1", "P_6", "10", "A", "K", "SCAT", "P_6", "P_3", "9", "P_2", "SCAT", "P_6", "J", "Q", "K", "9", "J", "P_5", "Q", "P_2", "K", "9", "P_5", "Q", "P_2", "P_4", "J", "P_5", "P_2", "K", "P_4", "J", "P_3", "Q", "K", "J", "P_3"],
        ]);

        $game->reels()->create([
            'position' => 2,
            'is_bonus' => true,
            'values' => ["P_4", "P_3", "A", "K", "P_2", "P_3", "Q", "J", "P_4", "P_2", "P_1", "SCAT", "9", "P_2", "P_4", "Q", "A", "P_6", "10", "K", "A", "P_4", "SCAT", "P_6", "P_2", "Q", "K", "P_5", "P_6", "10", "K", "P_1", "P_4", "Q", "P_6", "SCAT", "9", "A", "10", "P_4", "Q", "A", "P_2", "P_1", "J", "P_5", "P_3", "P_1", "P_2", "9", "A", "P_6", "K", "10", "9", "P_1", "A", "P_5", "P_4", "K", "SCAT", "A", "P_3", "P_4", "SCAT", "9", "A", "J", "10", "P_5", "P_3", "9", "J", "Q", "A", "P_5", "K", "J", "P_1", "P_5", "P_4", "J", "P_3", "K", "P_2", "9", "J", "Q", "P_1", "9", "J", "10", "Q", "P_6", "P_3", "P_1", "J", "K", "P_2", "9", "P_3", "P_6", "10", "K", "9", "P_5", "P_1", "P_3", "P_4", "P_5", "10", "P_6", "P_2", "P_1", "10", "P_6", "J", "P_5", "Q", "P_6", "10", "P_5", "P_3", "P_2", "Q"],
        ]);

        $game->reels()->create([
            'position' => 3,
            'is_bonus' => true,
            'values' => ["K", "P_3", "P_4", "A", "P_2", "K", "P_5", "10", "9", "P_1", "P_3", "10", "P_4", "A", "P_1", "P_6", "J", "A", "P_1", "P_2", "P_6", "SCAT", "Q", "P_2", "9", "P_1", "P_5", "P_4", "9", "A", "P_3", "P_2", "Q", "K", "A", "J", "P_5", "P_4", "A", "SCAT", "P_6", "J", "Q", "9", "SCAT", "P_6", "Q", "P_3", "A", "P_4", "9", "P_5", "P_6", "SCAT", "J", "10", "P_5", "P_2", "Q", "P_3", "SCAT", "9", "Q", "K", "P_3", "A", "P_4", "9", "P_6", "Q", "J", "A", "P_1", "P_3", "P_6", "J", "P_4", "10", "P_5", "Q", "P_1", "P_6", "9", "J", "A", "P_6", "10", "Q", "9", "P_3", "10", "P_4", "K", "P_3", "P_6", "J", "P_2", "Q", "K", "P_3", "10", "P_5", "9", "P_1", "J", "P_2", "K", "P_1", "10", "P_5", "K", "P_4", "P_2", "J", "P_1", "K", "P_4", "P_2", "10", "P_1", "P_5", "K", "P_2", "10", "P_5"],
        ]);

        $game->reels()->create([
            'position' => 4,
            'is_bonus' => true,
            'values' => ["P_4", "A", "10", "P_6", "P_4", "P_2", "SCAT", "P_6", "J", "P_4", "10", "P_6", "P_2", "K", "J", "10", "P_2", "P_3", "P_1", "Q", "P_2", "P_6", "A", "K", "Q", "P_1", "A", "SCAT", "10", "P_5", "P_1", "P_2", "P_3", "J", "10", "Q", "A", "K", "P_2", "SCAT", "P_1", "Q", "10", "J", "P_3", "P_6", "K", "Q", "9", "P_3", "P_1", "P_5", "K", "P_2", "J", "P_3", "P_1", "Q", "J", "10", "9", "P_5", "P_1", "P_3", "A", "Q", "P_4", "K", "P_2", "P_5", "A", "P_4", "P_2", "Q", "9", "P_6", "P_5", "SCAT", "P_2", "P_6", "P_3", "P_4", "9", "10", "P_3", "SCAT", "P_5", "P_1", "10", "P_3", "P_5", "K", "9", "Q", "P_4", "J", "A", "P_5", "Q", "K", "10", "9", "P_1", "P_5", "K", "P_3", "A", "P_4", "P_6", "9", "J", "P_1", "A", "9", "P_4", "J", "A", "P_5", "K", "P_6", "9", "P_4", "J", "P_6", "9"],
        ]);

        $game->reels()->create([
            'position' => 5,
            'is_bonus' => true,
            'values' => ["A", "P_6", "P_1", "9", "P_4", "P_2", "Q", "P_3", "9", "A", "P_6", "K", "P_2", "A", "SCAT", "J", "P_1", "P_6", "10", "K", "J", "SCAT", "P_6", "A", "P_2", "Q", "P_1", "P_4", "A", "K", "J", "P_3", "P_6", "K", "Q", "P_3", "9", "J", "P_5", "A", "K", "P_2", "9", "P_4", "P_6", "10", "P_3", "P_4", "A", "P_1", "P_3", "SCAT", "K", "A", "J", "P_2", "SCAT", "P_6", "P_1", "Q", "J", "P_6", "K", "P_2", "P_5", "SCAT", "K", "P_6", "P_2", "P_3", "J", "K", "P_5", "P_1", "9", "P_3", "10", "P_2", "Q", "A", "K", "P_2", "P_5", "P_3", "Q", "P_2", "P_4", "P_1", "P_6", "P_3", "P_5", "Q", "P_1", "10", "9", "P_3", "A", "Q", "J", "10", "P_4", "Q", "P_5", "P_1", "10", "J", "P_4", "P_1", "9", "10", "J", "P_5", "P_4", "Q", "9", "10", "P_5", "P_4", "9", "10", "P_5", "P_4", "9", "10", "P_5"],
        ]);
    }
}
