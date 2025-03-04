<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface GameProviderInterface
{
    public function spin(Collection $reels, int $length): array;
}
