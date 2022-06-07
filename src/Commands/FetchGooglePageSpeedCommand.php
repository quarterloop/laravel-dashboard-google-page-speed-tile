<?php

namespace Quarterloop\GooglePageSpeedTile\Commands;

use Illuminate\Console\Command;
use Quarterloop\GooglePageSpeedTile\Services\GooglePageSpeedAPI;
use Quarterloop\GooglePageSpeedTile\GooglePageSpeedDesktopStore;
use Quarterloop\GooglePageSpeedTile\GooglePageSpeedMobileStore;
use Session;

class FetchGooglePageSpeedCommand extends Command
{
    protected $signature = 'dashboard:fetch-google-page-speed-data';

    protected $description = 'Fetch Google Page Speed data';

    public function handle(GooglePageSpeedAPI $google_page_speed_api)
    {

        $this->info('Fetching desktop data ...');

        $pageSpeedDesktop = $google_page_speed_api::getPageSpeedDesktop(
            Session::get('website'),
            config('dashboard.tiles.google_page_speed.key'),
        );

        GooglePageSpeedDesktopStore::make()->setData($pageSpeedDesktop);

        $this->info('Stored desktop data ...');


        $this->info('Fetching mobile data ...');

        $pageSpeedMobile = $google_page_speed_api::getPageSpeedMobile(
            Session::get('website'),
            config('dashboard.tiles.google_page_speed.key'),
        );

        GooglePageSpeedMobileStore::make()->setData($pageSpeedMobile);

        $this->info('Stored desktop data ...');

        $this->info('All done!');
    }
}
