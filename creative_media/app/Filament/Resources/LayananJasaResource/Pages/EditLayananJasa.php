<?php

namespace App\Filament\Resources\LayananJasaResource\Pages;

use App\Filament\Resources\LayananJasaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLayananJasa extends EditRecord
{
    protected static string $resource = LayananJasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
