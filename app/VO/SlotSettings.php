<?php

declare(strict_types=1);

namespace App\VO;

class SlotSettings
{
    private Reel $reel;

    public function __construct()
    {
        $this->reel = new Reel();
    }

    public function getReel(): Reel
    {
        return $this->reel;
    }


}
