<?php

declare(strict_types=1);

namespace App\VO;

class Reel
{
    private array $strips = [];

    public function __construct(int $stripNumber = 5)
    {
        for ($i = 0; $i < $stripNumber; $i++) {
            $this->strips[$i] = new Strip();
        }
    }

    public function getStrips(): array
    {
        return $this->strips;
    }
}
