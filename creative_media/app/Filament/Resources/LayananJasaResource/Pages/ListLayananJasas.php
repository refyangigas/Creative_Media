<?php

namespace App\Filament\Resources\LayananJasaResource\Pages;

use App\Filament\Resources\LayananJasaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLayananJasas extends ListRecords
{
    protected static string $resource = LayananJasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
