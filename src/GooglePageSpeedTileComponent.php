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
            'desktopScore'      => $pageSpeedDesktopStore->getData()['categories']['performance']['score'],
            'mobileScore'       => $pageSpeedMobileStore->getData()['categories']['performance']['score'],
            'lastUpdateTime'  => date('H:i:s', strtotime($pageSpeedStore->getLastUpdateTime())),
            'lastUpdateDate'  => date('d.m.Y', strtotime($pageSpeedStore->getLastUpdateDate())),
        ]);
    }
}
