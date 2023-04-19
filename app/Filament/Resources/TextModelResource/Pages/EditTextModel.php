<?php

namespace App\Filament\Resources\TextModelResource\Pages;

use App\Filament\Resources\TextModelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTextModel extends EditRecord
{
    protected static string $resource = TextModelResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
