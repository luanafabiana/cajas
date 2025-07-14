<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArchivoResource\Pages;
use App\Filament\Resources\ArchivoResource\RelationManagers;
use App\Models\Archivo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;
use App\Models\Empresa; // Asegúrate de importar tu modelo Empresa

class ArchivoResource extends Resource
{
    protected static ?string $model = Archivo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(30),
                    
                Select::make('empresa_id')
                    ->label('Empresa') // Personaliza el label si lo necesitas
                    ->required()
                    ->relationship(
                        name: 'empresa', // Nombre del método de relación en el modelo (public function empresa())
                        titleAttribute: 'nombre', // Columna de la tabla `empresas` que se mostrará en el Select
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
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detalle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('empresa_id')
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
            'index' => Pages\ListArchivos::route('/'),
            'create' => Pages\CreateArchivo::route('/create'),
            'edit' => Pages\EditArchivo::route('/{record}/edit'),
        ];
    }
}
