<?php

namespace quaterloop\GooglePageSpeedTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use quaterloop\GooglePageSpeedTile\Commands\FetchGooglePageSpeedCommand;

class GooglePageSpeedTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchGooglePageSpeedCommand::class -> namespace($this->namespace),
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-google-page-speed-tile'),
        ], 'dashboard-google-page-speed-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-google-page-speed-tile');

        Livewire::component('google-page-speed-tile', GooglePageSpeedTileComponent::class);
    }
}
