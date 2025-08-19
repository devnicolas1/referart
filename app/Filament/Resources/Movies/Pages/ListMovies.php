<?php

namespace App\Filament\Resources\Movies\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\Movies\MovieResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMovies extends ListRecords
{
    protected static string $resource = MovieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
