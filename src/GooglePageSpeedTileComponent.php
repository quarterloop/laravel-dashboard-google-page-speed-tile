<?php

namespace quaterloop\GooglePageSpeedTile;

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
        $googlePageSpeedStore = GooglePageSpeedStore::make();

        return view('google-page-speed-tile::tile', [
            'pageSpeed' => $googlePageSpeedStore->getData()
        ]);
    }
}
