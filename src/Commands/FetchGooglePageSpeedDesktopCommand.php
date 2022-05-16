<?php

namespace Quaterloop\GooglePageSpeedTile\Commands;

use Illuminate\Console\Command;
use Quaterloop\GooglePageSpeedTile\Services\GooglePageSpeedAPI;
use Quaterloop\GooglePageSpeedTile\GooglePageSpeedDesktopStore;

class FetchGooglePageSpeedDesktopCommand extends Command
{
    protected $signature = 'dashboard:fetch-google-page-speed-desktop-data';

    protected $description = 'Fetch Google Page Speed Desktop data';

    public function handle(GooglePageSpeedAPI $google_page_speed_api)
    {

      $this->info('Fetching data...');

        $pageSpeedDesktop = $google_page_speed_api::getPageSpeedDesktop(
            config('dashboard.tiles.google_page_speed.url'),
            config('dashboard.tiles.google_page_speed.key'),
        );

        GooglePageSpeedDesktopStore::make()->setData($pageSpeedDesktop);

        $this->info('All done!');
    }
}
