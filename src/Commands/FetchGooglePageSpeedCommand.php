<?php

namespace Quaterloop\GooglePageSpeedTile\Commands;

use Illuminate\Console\Command;
use Quaterloop\GooglePageSpeedTile\Services\GooglePageSpeedAPI;
use Quaterloop\GooglePageSpeedTile\GooglePageSpeedDesktopStore;
use Quaterloop\GooglePageSpeedTile\GooglePageSpeedMobileStore;

class FetchGooglePageSpeedCommand extends Command
{
    protected $signature = 'dashboard:fetch-google-page-speed-data';

    protected $description = 'Fetch Google Page Speed data';

    public function handle(GooglePageSpeedAPI $google_page_speed_api)
    {

        $this->info('Fetching desktop data ...');

        $pageSpeedDesktop = $google_page_speed_api::getPageSpeedDesktop(
            config('dashboard.tiles.google_page_speed.url'),
            config('dashboard.tiles.google_page_speed.key'),
        );

        GooglePageSpeedDesktopStore::make()->setData($pageSpeedDesktop);

        $this->info('Stored desktop data ...');


        $this->info('Fetching mobile data ...');

        $pageSpeedMobile = $google_page_speed_api::getPageSpeedMobile(
            config('dashboard.tiles.google_page_speed.url'),
            config('dashboard.tiles.google_page_speed.key'),
        );

        GooglePageSpeedMobileStore::make()->setData($pageSpeedMobile);

        $this->info('Stored desktop data ...');

        $this->info('All done!');
    }
}
