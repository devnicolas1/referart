<?php

namespace App\Filament\Resources\Games\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\Games\GameResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGame extends EditRecord
{
    protected static string $resource = GameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
