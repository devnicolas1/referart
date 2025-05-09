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

    /**
     * Returns the localized navigation label.
     * 
     * @return string
     */
    public static function getNavigationLabel(): string
    {
        return __('filament.Games');
    }

    /**
     * Returns the localized heading.
     * 
     * @return string
     */
    public function getHeading(): string
    {
        return __('filament.Games');
    }

    /**
     * Returns the localized model label.
     * 
     * @return string
     */
    public static function getModelLabel(): string
    {
        return __('filament.Games');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // -----------------------------------------------------------------------------------------------------

                FileUpload::make('cover_art')
                    ->label(__('filament.Cover Art'))
                    ->image()
                    ->imageEditor()
                    ->directory('games')
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------

                TextInput::make('name')
                    ->label(__('filament.Name'))
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------

                Select::make('status')
                    ->label(__('filament.Status'))
                    ->required()
                    ->options(config('referart.statuses'))
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------

                TextInput::make('score')
                    ->label(__('filament.Score'))
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(10)
                    ->step(0.1)
                    ->default(5.0)
                    ->columnSpanFull(),

                // -----------------------------------------------------------------------------------------------------

                MarkdownEditor::make('review')
                    ->label(__('filament.Review'))
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
                    ->label(__('filament.Cover Art'))
                    ->disk('public')
                    ->width(150)
                    ->height(100)
                    ->defaultImageUrl(url('/storage/placeholder-image.jpg')),

                // -----------------------------------------------------------------------------------------------------

                TextColumn::make('name')
                    ->label(__('filament.Name'))
                    ->searchable()
                    ->sortable(),

                // -----------------------------------------------------------------------------------------------------

                TextColumn::make('status')
                    ->label(__('filament.Status'))
                    ->formatStateUsing(function (string $state): string {
                        $status = config("referart.statuses.{$state}");
                        return __("filament.statuses.{$status}");
                    })
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
                    ->label(__('filament.Score'))
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
                    ->label(__('filament.Filter by Status'))
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
