<?php

namespace App\Filament\Resources\CoursefeeResource\Pages;

use App\Filament\Resources\CoursefeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoursefee extends EditRecord
{
    protected static string $resource = CoursefeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
