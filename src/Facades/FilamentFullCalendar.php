<?php

namespace Marshmallow\FilamentFullCalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marshmallow\FilamentFullCalendar\FilamentFullCalendar
 */
class FilamentFullCalendar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-fullcalendar';
    }
}
