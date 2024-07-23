<?php

namespace App\Filament\Resources\BookingResource\Pages;

use App\Filament\Resources\BookingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    
    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'pickup' => Tab::make()->query(fn ($query) => $query->where('booking_type', 'pickup')),
            'dropoff' => Tab::make()->query(fn ($query) => $query->where('booking_type', 'dropoff')),
        ];
    }
}
