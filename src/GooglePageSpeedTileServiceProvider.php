<?php

namespace Quaterloop\GooglePageSpeedTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Quaterloop\GooglePageSpeedTile\Commands\FetchGooglePageSpeedDesktopCommand;
use Quaterloop\GooglePageSpeedTile\Commands\FetchGooglePageSpeedMobileCommand;

class GooglePageSpeedTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchGooglePageSpeedDesktopCommand::class,
                FetchGooglePageSpeedMobileCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-google-page-speed-tile'),
        ], 'dashboard-google-page-speed-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-google-page-speed-tile');

        Livewire::component('google-page-speed-tile', GooglePageSpeedTileComponent::class);
    }
}
