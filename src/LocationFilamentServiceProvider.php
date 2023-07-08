<?php
namespace CentoSquare\LocationFilament;

use Spatie\LaravelPackageTools\Package;
use Filament\PluginServiceProvider;

class LocationFilamentServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('location_filament');
    }
}
