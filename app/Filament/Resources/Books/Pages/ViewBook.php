<?php

namespace App\Filament\Resources\Books\Pages;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use App\Filament\Resources\Books\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBook extends ViewRecord
{
    /**
     * The resource that this page belongs to.
     */
    protected static string $resource = BookResource::class;

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
