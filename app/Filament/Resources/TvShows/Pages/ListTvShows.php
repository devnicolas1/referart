<?php

namespace App\Filament\Resources\TvShows\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\TvShows\TvShowResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTvShows extends ListRecords
{
    protected static string $resource = TvShowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
