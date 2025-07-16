<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentoResource\Pages;
use App\Filament\Resources\DocumentoResource\RelationManagers;
use App\Models\Documento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\Select;


class DocumentoResource extends Resource
{
    protected static ?string $model = Documento::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('detallefileweb')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('detalle1')
                    ->required()
                    ->maxLength(255),
                Select::make('empresa_id')
                    ->label('Empresa') // Personaliza el label si lo necesitas
                    ->required()
                    ->relationship(
                        name: 'empresa', // Nombre del método de relación en el modelo (public function empresa())
                        titleAttribute: 'nombre', // Columna de la tabla `empresas` que se mostrará en el Select
                    )
                    ->searchable() // Permite búsqueda dinámica (opcional)
                    ->preload() // Carga opciones iniciales (opcional para muchos registros)
                    ->native(false), // Mejora la UI en algunos navegadores (opcional)
                    //->columnSpanFull(), // Ocupa todo el ancho (opcional)

                Select::make('tipodocumento_id')
                    ->label('Tipo documento') // Personaliza el label si lo necesitas
                    ->required()
                    ->relationship(
                        name: 'tipodocumento', // Nombre del método de relación en el modelo (public function empresa())
                        titleAttribute: 'tipodocumento', // Columna de la tabla `empresas` que se mostrará en el Select
                    )
                    ->searchable() // Permite búsqueda dinámica (opcional)
                    ->preload() // Carga opciones iniciales (opcional para muchos registros)
                    ->native(false), // Mejora la UI en algunos navegadores (opcional)
                    //->columnSpanFull(), // Ocupa todo el ancho (opcional)

                    Select::make('caja_id')
                    ->label('Caja') // Personaliza el label si lo necesitas
                    ->required()
                    ->relationship(
                        name: 'caja', // Nombre del método de relación en el modelo (public function empresa())
                        titleAttribute: 'codigocaja', // Columna de la tabla `empresas` que se mostrará en el Select
                    )
                    ->searchable() // Permite búsqueda dinámica (opcional)
                    ->preload() // Carga opciones iniciales (opcional para muchos registros)
                    ->native(false), // Mejora la UI en algunos navegadores (opcional)
                    //->columnSpanFull(), // Ocupa todo el ancho (opcional)

                    Select::make('agencia_id')
                    ->label('Agencia') // Personaliza el label si lo necesitas
                    ->required()
                    ->relationship(
                        name: 'agencia', // Nombre del método de relación en el modelo (public function empresa())
                        titleAttribute: 'agencia', // Columna de la tabla `empresas` que se mostrará en el Select
                    )
                    ->searchable() // Permite búsqueda dinámica (opcional)
                    ->preload() // Carga opciones iniciales (opcional para muchos registros)
                    ->native(false), // Mejora la UI en algunos navegadores (opcional)
                    // //->columnSpanFull(), // Ocupa todo el ancho (opcional)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detallefileweb')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detalle1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detalle2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detalle3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('empresa_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipodocumento_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('caja_id')
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
            'index' => Pages\ListDocumentos::route('/'),
            'create' => Pages\CreateDocumento::route('/create'),
            'edit' => Pages\EditDocumento::route('/{record}/edit'),
        ];
    }
}
