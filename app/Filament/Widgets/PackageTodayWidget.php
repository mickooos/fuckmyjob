<?php

namespace App\Filament\Widgets;

use App\Models\Package;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Carbon\Carbon;

class PackageTodayWidget extends BaseWidget
{
    protected function getCards(): array
    {
        $count = Package::whereDate('created_at', Carbon::today())->count();

        return [
            Card::make('Paket Hari ini', $count. ' paket')
                ->icon('heroicon-s-cube')
                ->color('success')
        ];
    }
}
