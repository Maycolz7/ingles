<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GrupoResource\Pages;
use App\Filament\Resources\GrupoResource\RelationManagers;
use App\Models\Grupo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GrupoResource extends Resource
{
    protected static ?string $model = Grupo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Capacidad')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Descripcion')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('Docente_id')
                    ->label('Docente')
                    ->options(function () {
                        return \App\Models\User::whereHas('roles', function ($query) {
                            $query->where('name', 'Docente');
                        })->pluck('name', 'id'); // 'name' es el campo que muestra y 'id' el valor
                    })
                    ->searchable() // Permite buscar en el listado
                    ->required(),
                Forms\Components\Select::make('Curso_id')
                    ->relationship('curso', 'Nombre')
                    ->required(),
                Forms\Components\Select::make('Periodo_academico_id')
                    ->relationship('periodoAcademico', 'Nombre')
                    ->required(),
                Forms\Components\TextInput::make('Nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('Fecha de inicio')
                    ->required(),
                Forms\Components\DatePicker::make('Fecha de fin')
                    ->required(),
                Forms\Components\TextInput::make('Salon')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Capacidad')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Descripcion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('docente.name')
                    ->label('Docente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('curso.Nombre')
                    ->label('Curso')
                    ->searchable(),
                Tables\Columns\TextColumn::make('periodoAcademico.Nombre')
                    ->label('Periodo Académico')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Fecha de inicio')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Fecha de fin')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Salon')
                    ->searchable(),
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
            'index' => Pages\ListGrupos::route('/'),
            'create' => Pages\CreateGrupo::route('/create'),
            'edit' => Pages\EditGrupo::route('/{record}/edit'),
        ];
    }
}
