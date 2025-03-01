<?php

namespace Database\Seeders;

use Database\Factories\GameFactory;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameFactory::new()->create();
    }
}
