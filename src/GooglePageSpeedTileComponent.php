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
            'data' => GooglePageSpeedStore::make()->getData(),
        ]);
    }
}
