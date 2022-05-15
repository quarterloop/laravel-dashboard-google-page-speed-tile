<?php

namespace Quaterloop\GooglePageSpeedTile\Commands;

use Illuminate\Console\Command;
use Quaterloop\GooglePageSpeedTile\Services\GooglePageSpeedAPI;
use Quaterloop\GooglePageSpeedTile\GooglePageSpeedStore;

class FetchGooglePageSpeedCommand extends Command
{
    protected $signature = 'dashboard:fetch-google-page-speed-data';

    protected $description = 'Fetch Google Page Speed data';

    public function handle()
    {

        $pageSpeed = GooglePageSpeedAPI::getPageSpeed(
            config('dashboard.tiles.google_page_speed.url'),
            config('dashboard.tiles.google_page_speed.key'),
        );

        GooglePageSpeedStore::make()->setData($pageSpeed);

        $this->info('All done!');
    }
}
