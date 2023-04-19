<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TextModelResource\Pages;
use App\Filament\Resources\TextModelResource\RelationManagers;
use App\Models\TextModel;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TextModelResource extends Resource
{
    protected static ?string $model = TextModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-annotation';

    protected static ? string $navigationGroup = 'Menu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image'),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(2048),
                Forms\Components\Textarea::make('content'),
                Forms\Components\Toggle::make('active')
                    ->required(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListTextModels::route('/'),
            'create' => Pages\CreateTextModel::route('/create'),
            'edit' => Pages\EditTextModel::route('/{record}/edit'),
        ];
    }
}
