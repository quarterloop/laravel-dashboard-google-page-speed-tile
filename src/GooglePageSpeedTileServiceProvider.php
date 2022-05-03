<?php

namespace quaterloop\GooglePageSpeedTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class GooglePageSpeedTileServiceProvider extends ServiceProvider
{
    public function boot()
    {

        Livewire::component('google-page-speed-tile', GooglePageSpeedTileComponent::class);

        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchDataFromApiCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-google-page-speed-tile'),
        ], 'dashboard-google-page-speed-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-google-page-speed-tile');
    }
}
