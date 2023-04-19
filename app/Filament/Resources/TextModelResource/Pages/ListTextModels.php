<?php

namespace App\Filament\Resources\TextModelResource\Pages;

use App\Filament\Resources\TextModelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextModels extends ListRecords
{
    protected static string $resource = TextModelResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
