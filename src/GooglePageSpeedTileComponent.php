<?php

namespace Quaterloop\GooglePageSpeedTile;

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
        return view('dashboard-google-page-speed-tile::tile', [
            'website'           => config('dashboard.tiles.google_page_speed.url'),
            'desktopScore'      => GooglePageSpeedDesktopStore::make()->getData()['categories']['performance']['score'],
            'mobileScore'       => GooglePageSpeedMobileStore::make()->getData()['categories']['performance']['score'],
            'lastFetchedDate'   => date('d.m.Y', strtotime(GooglePageSpeedDesktopStore::make()->getData()['fetchTime'])),
            'lastFetchedTime'   => date('H:i:s', strtotime(GooglePageSpeedDesktopStore::make()->getData()['fetchTime'])),
        ]);
    }
}
