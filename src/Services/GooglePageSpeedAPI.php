<?php

namespace Quaterloop\GooglePageSpeedTile\Services;

use Illuminate\Support\Facades\Http;

class GooglePageSpeedAPI
{
  public static function getPageSpeedDesktop(string $url, string $key): array
  {
      $apiCallDesktop = "https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https%3A%2F%2F{$url}&category=CATEGORY_UNSPECIFIED&strategy=DESKTOP&key={$key}";

      $responseDesktop = Http::get($apiCallDesktop)->json();

      return $responseDesktop['lighthouseResult']['categories']['performance'];
  }

  public static function getPageSpeedMobile(string $url, string $key): array
  {
      $apiCallMobile = "https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https%3A%2F%2F{$url}&category=CATEGORY_UNSPECIFIED&strategy=DESKTOP&key={$key}";

      $responseMobile = Http::get($apiCallMobile)->json();

      return $responseMobile['lighthouseResult']['categories']['performance'];
  }
}
