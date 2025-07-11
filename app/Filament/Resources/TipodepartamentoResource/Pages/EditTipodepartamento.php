<?php

namespace App\Filament\Resources\TipodepartamentoResource\Pages;

use App\Filament\Resources\TipodepartamentoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTipodepartamento extends EditRecord
{
    protected static string $resource = TipodepartamentoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
