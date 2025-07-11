<?php

namespace App\Filament\Resources\TipodepartamentoResource\Pages;

use App\Filament\Resources\TipodepartamentoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipodepartamentos extends ListRecords
{
    protected static string $resource = TipodepartamentoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
