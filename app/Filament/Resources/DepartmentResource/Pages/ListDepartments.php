<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Filament\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Exports\DepartmentExporter;
use Filament\Actions\Exports\Enums\ExportFormat;

class ListDepartments extends ListRecords
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\ExportAction::make()
                    ->label('Export')
                    ->color('success')
                    ->exporter(DepartmentExporter::class)
                    ->formats([
                        ExportFormat::Xlsx,
                    ]),
        ];
    }
}
