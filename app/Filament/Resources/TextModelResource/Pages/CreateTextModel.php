<?php

namespace App\Filament\Resources\TextModelResource\Pages;

use App\Filament\Resources\TextModelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTextModel extends CreateRecord
{
    protected static string $resource = TextModelResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
