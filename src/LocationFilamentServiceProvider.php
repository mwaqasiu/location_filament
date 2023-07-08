<?php
namespace CentoSquare\LocationFilament;

use Filament\Navigation\UserMenuItem;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LocationFilamentServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('location_filament');
    }
}
