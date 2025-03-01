<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class GameProvider implements GameProviderInterface
{
    public function spin(Collection $reels, int $length): array
    {
        $result = [];

        foreach ($reels as $reel) {
            $reelElements = $reel->values;
            $offset = mt_rand(1, count($reelElements));
            $elements =  array_merge(
                $reelElements,
                array_splice($reelElements, 0, $length)
            );
            $result[] = array_slice($elements, $offset, $length);
        }

        return $result;
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
