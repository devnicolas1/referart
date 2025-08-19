<?php

namespace App\Filament\Resources\Movies\Pages;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use App\Filament\Resources\Movies\MovieResource;
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
            EditAction::make(),
            DeleteAction::make(),
        ];
    }
}
