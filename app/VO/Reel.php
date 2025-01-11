<?php

declare(strict_types=1);

namespace App\VO;

class Reel
{
    private array $strips = [];

    private array $bonusStrips = [];

    public function __construct()
    {
        $temp = file(base_path() . '/app/VO/reels.txt');
        foreach( $temp as $str )
        {
            $data = explode('=', $str);
            $elements = explode(',', $data[1]);
            [$index, $arrayName] = $this->getStripInfo($data);

            foreach( $elements as $elem ) {
                $elem = trim($elem);
                if ($elem !== '') {
                    $this->$arrayName[$index][] = $elem;
                }
            }
        }
    }

    public function getStrips(): array
    {
        return $this->strips;
    }

    public function getBonusStrips(): array
    {
        return $this->bonusStrips;
    }

    private function getStripInfo(array $data): array
    {
        preg_match('/\d+/', $data[0], $index);
        $arrayName = str_contains($data[0], 'Bonus') ? 'bonusStrips' : 'strips';

        return [$index[0], $arrayName];
    }
}
