![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-cms-youtube/master/art/screenshot.jpg)

# Filament cms youtube

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-cms-youtube/version.svg)](https://packagist.org/packages/tomatophp/filament-cms-youtube)
[![License](https://poser.pugx.org/tomatophp/filament-cms-youtube/license.svg)](https://packagist.org/packages/tomatophp/filament-cms-youtube)
[![Downloads](https://poser.pugx.org/tomatophp/filament-cms-youtube/d/total.svg)](https://packagist.org/packages/tomatophp/filament-cms-youtube)

Youtube Extension for Filament CMS Builder to auto import videos from Youtube

## Installation

```bash
composer require tomatophp/filament-cms-youtube
```
after install your package please run this command

```bash
php artisan filament-cms-youtube:install
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentCmsYoutube\FilamentCmsYoutubePlugin::make())
```


## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-cms-youtube-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-cms-youtube-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-cms-youtube-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-cms-youtube-migrations"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
