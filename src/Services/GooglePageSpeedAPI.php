<?php

namespace Quaterloop\GooglePageSpeedTile\Services;

use Illuminate\Support\Facades\Http;

class GooglePageSpeedAPI
{
  public static function getPageSpeedDesktop(string $url, string $key): array
  {
      $apiCallDesktop = "https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https%3A%2F%2F{$url}&category=CATEGORY_UNSPECIFIED&strategy=DESKTOP&key={$key}";

      return Http::get($apiCallDesktop)->json();
  }

  public static function getPageSpeedMobile(string $url, string $key): array
  {
      $apiCallMobile = "https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https%3A%2F%2F{$url}&category=CATEGORY_UNSPECIFIED&strategy=DESKTOP&key={$key}";

      return Http::get($apiCallMobile)->json();
  }
}
