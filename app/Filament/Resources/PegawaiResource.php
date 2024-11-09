<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PegawaiResource\Pages;
use App\Filament\Resources\PegawaiResource\RelationManagers;
use App\Models\Pegawai;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
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
                Forms\Components\Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki - Laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),
                Forms\Components\Select::make('pangkat_gol')
                    ->label('Pangkat / Golongan')
                    ->options([
                        'Juru Muda' => 'Juru Muda',
                        'Juru Muda Tk I' => 'Juru Muda Tk I',
                        'Juru' => 'Juru',
                        'Juru Tk I' => 'Juru Tk I',
                        'IIA Pengatur Muda' => 'Pengatur Muda',
                        'Pengatur Muda Tk I' => 'Pengatur Muda Tk I',
                        'Pengatur' => 'Pengatur',
                        'Pengatur Tk I' => 'Pengatur Tk I',
                        'Penata Muda' => 'Penata Muda',
                        'Penata Muda Tk I' => 'Penata Muda Tk I',
                        'Penata' => 'Penata',
                        'Penata Tk I' => 'Penata Tk I',
                        'Pembina' => 'Pembina',
                        'Pembina Tk I' => 'Pembina Tk I',
                        'Pembina Utama Muda' => 'Pembina Utama Muda',
                        'Pembina Utama Madya' => 'Pembina Utama Madya',
                        'Pembina Utama' => 'Pembina Utama'
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
                Forms\Components\FileUpload::make('photo')
                    ->acceptedFileTypes(['image/*'])
                    ->directory('web_profile/foto_asn')
                    ->image()
                    ->imageEditor(),
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
                Tables\Columns\TextColumn::make('unitKerja.nama_bidang')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
