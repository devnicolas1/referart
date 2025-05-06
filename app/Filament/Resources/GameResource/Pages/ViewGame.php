<?php

namespace App\Filament\Resources\GameResource\Pages;

use App\Filament\Resources\GameResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGame extends ViewRecord
{
    /**
     * The resource that this page belongs to.
     */
    protected static string $resource = GameResource::class;

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
