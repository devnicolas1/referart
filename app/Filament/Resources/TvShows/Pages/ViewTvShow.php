<?php

namespace App\Filament\Resources\TvShows\Pages;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use App\Filament\Resources\TvShows\TvShowResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTvShow extends ViewRecord
{
    /**
     * The resource that this page belongs to.
     */
    protected static string $resource = TvShowResource::class;

    /**
     * Get the header actions for the page.
     *
     * @return array<int, Actions\Action>
     */
    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
            DeleteAction::make(),
        ];
    }
}
