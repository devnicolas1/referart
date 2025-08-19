<?php

namespace App\Filament\Resources\GameResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\GameResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGames extends ListRecords
{
    protected static string $resource = GameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
