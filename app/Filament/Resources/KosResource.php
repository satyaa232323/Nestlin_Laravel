<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KosResource\Pages;
use App\Filament\Resources\KosResource\RelationManagers;
use App\Models\Kos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KosResource extends Resource
{
    protected static ?string $model = Kos::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?string $navigationLabel = 'Kos';
    protected static ?string $navigationGroup = 'Kos-Kosan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->label('Nama Kos')
                ->placeholder('Masukan nama kos')
                ->required(),
                Forms\Components\TextInput::make('harga')
                ->label('Harga/Bln')
                ->placeholder('Masukan harga'),
                Forms\Components\RichEditor::make('lokasi')
                ->label('Lokasi Kos')
                ->placeholder('Masukan lokasi kos'),
                Forms\Components\FileUpload::make('gambar')
                ->label('Masukan foto kos'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                ->searchable()
                ->label('Nama Kos'),
                Tables\Columns\TextColumn::make('lokasi')
                ->searchable()
                ->label('Lokasi')
                ->limit(50) 
                ->getStateUsing(fn ($record) => strip_tags($record->lokasi)),
                Tables\Columns\TextColumn::make('harga')
                ->searchable()
                ->sortable()
                ->label('Harga Kos'),
                Tables\Columns\ImageColumn::make('gambar')
                ->label('Foto Kos')
                ->disk('public')
                ->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKos::route('/'),
            'create' => Pages\CreateKos::route('/create'),
            'edit' => Pages\EditKos::route('/{record}/edit'),
        ];
    }
}
