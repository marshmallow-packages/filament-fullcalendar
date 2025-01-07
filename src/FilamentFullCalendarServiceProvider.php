<?php

namespace Marshmallow\FilamentFullCalendar;

use Filament\PluginServiceProvider;
use Marshmallow\FilamentFullCalendar\Commands\UpgradeFilamentFullCalendarCommand;
use Spatie\LaravelPackageTools\Package;

class FilamentFullCalendarServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-fullcalendar';

    protected array $beforeCoreScripts = [
        'filament-fullcalendar' => __DIR__ . '/../dist/filament-fullcalendar.js',
    ];

    protected array $styles = [
        'filament-fullcalendar' => __DIR__ . '/../dist/filament-fullcalendar.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(self::$name)
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(UpgradeFilamentFullCalendarCommand::class);
    }
}
