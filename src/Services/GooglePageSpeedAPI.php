<?php

namespace Quaterloop\GooglePageSpeedTile\Services;

use Illuminate\Support\Facades\Http;

class GooglePageSpeedAPI
{
    public static function getPageSpeed(string $url, string $key): array
    {
        $response = "https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https%3A%2F%2F{$url}&category=CATEGORY_UNSPECIFIED&strategy=STRATEGY_UNSPECIFIED&key={$key}";

        return Http::get($response)->json();
    }
}
