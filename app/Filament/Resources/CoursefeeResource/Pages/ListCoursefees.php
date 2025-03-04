<?php

namespace App\Filament\Resources\CoursefeeResource\Pages;

use App\Filament\Resources\CoursefeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoursefees extends ListRecords
{
    protected static string $resource = CoursefeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
