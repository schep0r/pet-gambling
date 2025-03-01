<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Game;

interface GameProviderInterface
{
    public function spin(Game $game): array;
}
