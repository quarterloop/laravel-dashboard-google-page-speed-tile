<?php

namespace quaterloop\GooglePageSpeedTile;

use Illuminate\Console\Command;
use quaterloop\GooglePageSpeedTile\Services\GooglePageSpeedAPI;
use quaterloop\GooglePageSpeedTile\GooglePageSpeedStore;

class FetchGooglePageSpeedCommand extends Command
{
    protected $signature = 'dashboard:fetch-data-from-google-page-speed';

    protected $description = 'Fetch data from Google Page Speed';

    public function handle()
    {
        $this->info('Fetching Page Speed...');


        $data = Http::get("https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https%3A%2F%2Fskouz.de&category=CATEGORY_UNSPECIFIED&strategy=STRATEGY_UNSPECIFIED&key=AIzaSyDHA5nTjanJxbpEwgNtiTT2paVy0H_jtKc")->json();


        GooglePageSpeedStore::make()->setData($data);

        $this->info('All done!');
    }
}
