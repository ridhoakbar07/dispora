<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PegawaiResource\Pages;
use App\Filament\Resources\PegawaiResource\RelationManagers;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $title = 'Pegawai';

    protected static ?string $navigationLabel = 'Pegawai';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('NIP')
                    ->label('NIP')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('pangkat_gol')
                    ->label('Pangkat / Golongan')
                    ->options([
                        'IA Juru Muda' => 'IA Juru Muda',
                        'IB Juru Muda Tingkat 1' => 'IB Juru Muda Tingkat 1',
                        'IC Juru' => 'IC Juru',
                        'ID Juru Tingkat 1' => 'ID Juru Tingkat 1',
                        'IIA Pengatur Muda' => 'IIA Pengatur Muda',
                        'IIB Pengatur Muda Tingkat 1' => 'IIB Pengatur Muda Tingkat 1',
                        'IIC Pengatur' => 'IIC Pengatur',
                        'IID Pengatur Tingkat 1' => 'IID Pengatur Tingkat 1',
                        'IIIA Penata Muda' => 'IIIA Penata Muda',
                        'IIIB Penata Muda Tingkat 1' => 'IIIB Penata Muda Tingkat 1',
                        'IIIC Penata' => 'IIIC Penata',
                        'IIID Penata Tingkat 1' => 'IIID Penata Tingkat 1',
                        'IVA Pembina' => 'IVA Pembina',
                        'IVB Pembina Tingkat 1' => 'IVB Pembina Tingkat 1',
                        'IVC Pembina Utama Muda' => 'IVC Pembina Utama Muda',
                        'IVD Pembina Utama Madya' => 'IVD Pembina Utama Madya',
                        'IVE Pembina Utama' => 'IVE Pembina Utama'
                    ])
                    ->required(),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('jenis_jabatan')
                    ->label('Jenis Jabatan')
                    ->options([
                        'Jabatan Tinggi Pratama' => 'Jabatan Tinggi Pratama',
                        'Jabatan Administrator' => 'Jabatan Administrator',
                        'Jabatan Pengawas' => 'Jabatan Pengawas',
                        'Jabatan Pelaksana' => 'Jabatan Pelaksana',
                        'Jabatan Fungsional' => 'Jabatan Fungsional',
                    ])
                    ->required(),
                Forms\Components\Select::make('unit_kerja_id')
                    ->relationship('unitKerja', 'nama_bidang')
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('NIP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pangkat_gol')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_asn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('unit_kerja_id')
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
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }
}
