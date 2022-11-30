<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageOrders extends ManageRecords
{
    protected static string $resource = OrderResource::class;
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }

    //show widget
    protected function getHeaderWidgets(): array
    {
        return [
            OrderResource\Widgets\OrderOverview::class,
        ];
    }

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make('Create Order')->after(function () {
                cache()->forget('total_price_order');
            }),
        ];
    }
}
