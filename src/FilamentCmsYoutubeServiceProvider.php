<?php

namespace TomatoPHP\FilamentCmsYoutube;

use Illuminate\Support\ServiceProvider;


class FilamentCmsYoutubeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentCmsYoutube\Console\FilamentCmsYoutubeInstall::class,
        ]);
 
        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-cms-youtube.php', 'filament-cms-youtube');
 
        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-cms-youtube.php' => config_path('filament-cms-youtube.php'),
        ], 'filament-cms-youtube-config');
 
        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
 
        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-cms-youtube-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-cms-youtube');
 
        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/filament-cms-youtube'),
        ], 'filament-cms-youtube-views');
 
        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-cms-youtube');
 
        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-cms-youtube'),
        ], 'filament-cms-youtube-lang');
 
        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
 
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
