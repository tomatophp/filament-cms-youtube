<?php

namespace TomatoPHP\FilamentCmsYoutube;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentCmsYoutubePlugin implements Plugin
{

    public function getId(): string
    {
        return 'filament-cms-youtube';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): self
    {
        return new FilamentCmsYoutubePlugin;
    }
}
