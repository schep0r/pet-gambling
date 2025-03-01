<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Game;
use Illuminate\Database\Eloquent\Collection;

class GameProvider implements GameProviderInterface
{
    public function spin(Game $game): array
    {
        return [];
    }

    public function getScreen(Collection $reels, int $length): array
    {
        $result = [];

        foreach ($reels as $reel) {
            $result[] = array_slice($reel->values, 0, $length);
        }

        return $result;
    }
}
