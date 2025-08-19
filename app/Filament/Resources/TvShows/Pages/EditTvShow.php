<?php

namespace App\Filament\Resources\TvShows\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\TvShows\TvShowResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTvShow extends EditRecord
{
    protected static string $resource = TvShowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
