<?php

namespace App\Filament\Resources\Movies\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\Movies\MovieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMovie extends EditRecord
{
    protected static string $resource = MovieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
