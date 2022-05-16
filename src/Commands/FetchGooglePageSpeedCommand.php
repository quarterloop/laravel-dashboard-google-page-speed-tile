<?php

namespace Quaterloop\GooglePageSpeedTile\Commands;

use Illuminate\Console\Command;
use Quaterloop\GooglePageSpeedTile\Services\GooglePageSpeedAPI;
use Quaterloop\GooglePageSpeedTile\GooglePageSpeedDesktopStore;
use Quaterloop\GooglePageSpeedTile\GooglePageSpeedMobileStore;

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

class FetchGooglePageSpeedDesktopCommand extends Command
{
    protected $signature = 'dashboard:fetch-google-page-speed-mobile-data';

    protected $description = 'Fetch Google Page Speed Mobile data';

    public function handle(GooglePageSpeedAPI $google_page_speed_api)
    {

      $this->info('Fetching data...');

        $pageSpeedMobile = $google_page_speed_api::getPageSpeedMobile(
            config('dashboard.tiles.google_page_speed.url'),
            config('dashboard.tiles.google_page_speed.key'),
        );

        GooglePageSpeedMobileStore::make()->setData($pageSpeedMobile);

        $this->info('All done!');
    }
}
