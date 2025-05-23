<?php

namespace App\Filament\Resources\MovieResource\Pages;

use App\Filament\Resources\MovieResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMovie extends ViewRecord
{
    /**
     * The resource that this page belongs to.
     */
    protected static string $resource = MovieResource::class;

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
