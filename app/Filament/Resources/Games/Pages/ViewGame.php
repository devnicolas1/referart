<?php

namespace App\Filament\Resources\Games\Pages;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use App\Filament\Resources\Games\GameResource;
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
            EditAction::make(),
            DeleteAction::make(),
        ];
    }
}
