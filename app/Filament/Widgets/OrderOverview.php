<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class OrderOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Orders', Order::count()),
            Card::make('Total Order Today', Order::whereDate('created_at', today())->count()),
        ];
    }
}
