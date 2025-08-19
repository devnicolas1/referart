<?php

namespace App\Filament\Resources\Games\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\Games\GameResource;
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
