<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Models\Game;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // -----------------------------------------------------------------------------------------------------

                FileUpload::make('cover_art')
                    ->image()
                    ->imageEditor()
                    ->directory('games')
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------

                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------

                Select::make('status')
                    ->required()
                    ->options(config('referart.statuses'))
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------

                TextInput::make('score')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(10)
                    ->step(0.1)
                    ->default(5.0)
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------

                MarkdownEditor::make('review')
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // -----------------------------------------------------------------------------------------------------

                ImageColumn::make('cover_art')
                    ->disk('public')
                    ->width(150)
                    ->height(100)
                    ->defaultImageUrl(url('/storage/placeholder-image.jpg')),

                // -----------------------------------------------------------------------------------------------------

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                // -----------------------------------------------------------------------------------------------------

                TextColumn::make('status')
                    ->formatStateUsing(fn (string $state): string => config("referart.statuses.{$state}"))
                    ->badge()
                    ->color(function ($state) {
                        $status = config("referart.statuses.{$state}");
                        return match ($status) {
                            config('referart.statuses.check_again') => Color::Purple,
                            config('referart.statuses.dropped')     => Color::Red,
                            config('referart.statuses.finished')    => Color::Emerald,
                            config('referart.statuses.in_progress') => Color::Amber,
                            config('referart.statuses.not_started') => Color::Gray,
                            config('referart.statuses.on_the_line') => Color::Cyan,
                            default                                 => Color::Gray,
                        };
                    })
                    ->sortable(),

                // -----------------------------------------------------------------------------------------------------

                TextColumn::make('score')
                    ->badge()
                    ->color(function ($state) {
                        return match (true) {
                            $state >= 9 => Color::Purple,
                            $state >= 7 => Color::Emerald,
                            $state >= 5 => Color::Amber,
                            default     => Color::Red,
                        };
                    })
                    ->icon(function ($state) {
                        return match (true) {
                            $state >= 9 => 'heroicon-o-star',
                            $state >= 7 => 'heroicon-o-hand-thumb-up',
                            $state >= 5 => 'heroicon-o-minus',
                            default     => 'heroicon-o-hand-thumb-down',
                        };
                    })
                    ->sortable(),

                // -----------------------------------------------------------------------------------------------------
            ])
            ->filters([
                SelectFilter::make('status')
                    ->multiple()
                    ->options(config('referart.statuses'))
                    ->label('Filter by Status')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->recordUrl(
                fn ($record) => static::getUrl('view', ['record' => $record])
            );
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
            'index' => Pages\ListGames::route('/'),
            'view' => Pages\ViewGame::route('/{record}'),
        ];
    }
}
