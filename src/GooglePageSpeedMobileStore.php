<?php

namespace Quarterloop\GooglePageSpeedTile;

use Spatie\Dashboard\Models\Tile;

class GooglePageSpeedMobileStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName("pageSpeedMobile");
    }

    public function setData(array $data): self
    {
        $this->tile->putData('lighthouseResult', $data);

        return $this;
    }

    public function getData(): array
    {
        return$this->tile->getData('lighthouseResult') ?? [];
    }
}
