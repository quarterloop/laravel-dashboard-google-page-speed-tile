<?php

namespace quaterloop\GooglePageSpeedTile;

use Illuminate\Support\Facades\Http;

class GooglePageSpeedAPI
{
    public static function getPageSpeed(string $url, string $key): array
    {
        $url = "https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed";

        $response = Http::get($url, [
          'url' => 'https%3A%2F%2F' . $url,
          'category' => 'PERFORMANCE',
          'strategy' = 'DESKTOP',
          'key' => $key
          ])->json()['lighthouseResult'];

        return $response;

    }
}
