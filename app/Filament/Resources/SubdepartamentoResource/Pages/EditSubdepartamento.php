<?php

namespace App\Filament\Resources\SubdepartamentoResource\Pages;

use App\Filament\Resources\SubdepartamentoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubdepartamento extends EditRecord
{
    protected static string $resource = SubdepartamentoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
