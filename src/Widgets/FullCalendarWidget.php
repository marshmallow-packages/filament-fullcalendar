<?php

namespace Marshmallow\FilamentFullCalendar\Widgets;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Widgets\Widget;
use Illuminate\View\View;
use Marshmallow\FilamentFullCalendar\Widgets\Concerns\CanFetchEvents;
use Marshmallow\FilamentFullCalendar\Widgets\Concerns\CanManageEvents;
use Marshmallow\FilamentFullCalendar\Widgets\Concerns\CanRefreshEvents;
use Marshmallow\FilamentFullCalendar\Widgets\Concerns\FiresEvents;
use Marshmallow\FilamentFullCalendar\Widgets\Concerns\UsesConfig;

class FullCalendarWidget extends Widget implements HasForms
{
    use InteractsWithForms, CanManageEvents {
        CanManageEvents::getForms insteadof InteractsWithForms;
    }
    use CanRefreshEvents;
    use CanFetchEvents;
    use FiresEvents;
    use UsesConfig;

    protected static string $view = 'filament-fullcalendar::fullcalendar';

    protected int | string | array $columnSpan = 'full';

    public function mount(): void
    {
        $this->setUpForms();
    }

    public function render(): View
    {
        return view(static::$view)
            ->with([
                'events' => $this->getViewData(),
            ]);
    }

    public function getKey(): string
    {
        return $this->key ?? 'default';
    }
}
