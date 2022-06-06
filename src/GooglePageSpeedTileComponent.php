<?php

namespace Quarterloop\GooglePageSpeedTile;

use Livewire\Component;

class GooglePageSpeedTileComponent extends Component
{

    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }


    public function render()
    {

      $pageSpeedDesktopStore = GooglePageSpeedDesktopStore::make();
      $pageSpeedMobileStore  = GooglePageSpeedMobileStore::make();

        return view('dashboard-google-page-speed-tile::tile', [
            'website'           => config('dashboard.tiles.google_page_speed.url'),
            'desktopScore'      => $pageSpeedDesktopStore->getData(),
            'mobileScore'       => $pageSpeedMobileStore->getData(),
            'lastUpdateTime'  => date('H:i:s', strtotime($pageSpeedDesktopStore->getLastUpdateTime())),
            'lastUpdateDate'  => date('d.m.Y', strtotime($pageSpeedDesktopStore->getLastUpdateDate())),
        ]);
    }
}
