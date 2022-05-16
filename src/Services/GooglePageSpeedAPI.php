<?php

namespace Quaterloop\GooglePageSpeedTile\Services;

use Illuminate\Support\Facades\Http;

class GooglePageSpeedDesktopAPI
{
    public static function getPageSpeedDesktop(string $url, string $key): array
    {
        $apiCall = "https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https%3A%2F%2F{$url}&category=CATEGORY_UNSPECIFIED&strategy=DESKTOP&key={$key}";

        $response = Http::get($apiCall)->json();

        return $response['lighthouseResult']['categories']['performance'];
    }
}

class GooglePageSpeedMobileAPI
{
    public static function getPageSpeedMobile(string $url, string $key): array
    {
        $apiCall = "https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https%3A%2F%2F{$url}&category=CATEGORY_UNSPECIFIED&strategy=MOBILE&key={$key}";

        $response = Http::get($apiCall)->json();

        return $response['lighthouseResult']['categories']['performance'];
    }
}
