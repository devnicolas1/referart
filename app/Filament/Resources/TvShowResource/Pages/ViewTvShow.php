<?php

namespace App\Filament\Resources\TvShowResource\Pages;

use App\Filament\Resources\TvShowResource;
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
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
