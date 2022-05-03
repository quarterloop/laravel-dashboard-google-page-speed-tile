<?php

namespace SKOUZ\GooglePageSpeedTile;

use Illuminate\Console\Command;

class FetchDataFromApiCommand extends Command
{
    protected $signature = 'dashboard:fetch-data-from-google-page-speed';

    protected $description = 'Fetch data from Google Page Speed';

    public function handle()
    {
        $this->info('Fetching Page Speed...');


        $data = GooglePageSpeedAPI::getPageSpeed(
            config('dashboard.tiles.google_page_speed.url'),
            config('dashboard.tiles.google_page_speed.key')
        );


        GooglePageSpeedStore::make()->setData($data);

        $this->info('All done!');
    }
}
