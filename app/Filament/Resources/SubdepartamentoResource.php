<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubdepartamentoResource\Pages;
use App\Filament\Resources\SubdepartamentoResource\RelationManagers;
use App\Models\Subdepartamento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;
use App\Models\Empresa; // Asegúrate de importar tu modelo Empresa

class SubdepartamentoResource extends Resource
{
    protected static ?string $model = Subdepartamento::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('subdepartamento')
                    ->required()
                    ->maxLength(50),
                Select::make('departamento_id')
                    ->label('Departamento') // Personaliza el label si lo necesitas
                    ->required()
                    ->relationship(
                        name: 'departamento', // Nombre del método de relación en el modelo (public function empresa())
                        titleAttribute: 'departamento', // Columna de la tabla `empresas` que se mostrará en el Select
                    )
                    ->searchable() // Permite búsqueda dinámica (opcional)
                    ->preload() // Carga opciones iniciales (opcional para muchos registros)
                    ->native(false) // Mejora la UI en algunos navegadores (opcional)
                    //->columnSpanFull(), // Ocupa todo el ancho (opcional)
                            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subdepartamento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('departamento_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSubdepartamentos::route('/'),
            'create' => Pages\CreateSubdepartamento::route('/create'),
            'edit' => Pages\EditSubdepartamento::route('/{record}/edit'),
        ];
    }
}
