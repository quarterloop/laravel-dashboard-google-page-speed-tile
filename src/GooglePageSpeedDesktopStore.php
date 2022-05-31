<?php

namespace Quarterloop\GooglePageSpeedTile;

use Spatie\Dashboard\Models\Tile;

class GooglePageSpeedDesktopStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName("pageSpeedDesktop");
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

    public function getLastUpdateTime()
    {
        $tileName = 'pageSpeedDesktop';

        $queryTime = DB::table('dashboard_tiles')->select('updated_at')->where('name', '=', $tileName)->get();

        $responseTime = Str::substr($queryTime, 26, 9);

        return $responseTime;
    }

    public function getLastUpdateDate()
    {
        $tileName = 'pageSpeedDesktop';

        $queryDate = DB::table('dashboard_tiles')->select('updated_at')->where('name', '=', $tileName)->get();

        $responseDate = Str::substr($queryDate, 16, 10);

        return $responseDate;
    }
}
