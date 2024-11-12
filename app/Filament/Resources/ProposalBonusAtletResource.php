<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProposalBonusAtletResource\Pages;
use App\Filament\Resources\ProposalBonusAtletResource\RelationManagers;
use App\Models\ProposalBonusAtlet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn\IconColumnSize;
use Filament\Tables\Table;
use Hugomyb\FilamentMediaAction\Tables\Actions\MediaAction;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProposalBonusAtletResource extends Resource
{
    protected static ?string $model = ProposalBonusAtlet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $title = 'Proposal Bonus Atlet';

    protected static ?string $navigationLabel = 'Proposal Bonus Atlet';

    protected static ?string $navigationGroup = 'SISPORA';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Informasi Pribadi')
                    ->schema([
                        Forms\Components\TextInput::make('NIK')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('telp')
                            ->tel()
                            ->required()
                            ->prefixIcon('heroicon-m-phone')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->prefixIcon('heroicon-m-envelope')
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('ktp')
                            ->label('KTP')
                            ->acceptedFileTypes(['image/*', 'application/pdf'])
                            ->directory(fn(): string => 'proposal/bonus_atlet/' . auth()->user()->name)
                            ->minSize(100)
                            ->maxSize(2048)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Forms\Components\Fieldset::make('Data Prestasi Kejuaraan')
                    ->schema([
                        Forms\Components\TextInput::make('no_piagam')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('nama_kejuaraan')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('kelas_cabor')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('sk_pengprov')
                            ->acceptedFileTypes(['image/*', 'application/pdf'])
                            ->directory(fn(): string => 'proposal/bonus_atlet/' . auth()->user()->name)
                            ->minSize(100)
                            ->maxSize(2048)
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('piagam')
                            ->acceptedFileTypes(['image/*', 'application/pdf'])
                            ->directory(fn(): string => 'proposal/bonus_atlet/' . auth()->user()->name)
                            ->minSize(size: 100)
                            ->maxSize(2048)
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('foto_medali')
                            ->acceptedFileTypes(['image/*', 'application/pdf'])
                            ->directory(fn(): string => 'proposal/bonus_atlet/' . auth()->user()->name)
                            ->minSize(size: 100)
                            ->maxSize(2048)
                            ->imageEditor()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Forms\Components\Fieldset::make('Informasi Keuangan')
                    ->schema([
                        Forms\Components\TextInput::make('no_rekening')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nama_bank')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('buku_tabungan')
                            ->acceptedFileTypes(['image/*', 'application/pdf'])
                            ->directory(fn(): string => 'proposal/bonus_atlet/' . auth()->user()->name)
                            ->minSize(100)
                            ->maxSize(1024)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Fieldset::make('Admin Control')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required(),
                        Forms\Components\Textarea::make('keterangan')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\Toggle::make('validasi')
                            ->onColor('success')
                            ->offColor('danger'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('NIK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telp')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('no_piagam')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_kejuaraan')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('kelas_cabor')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('no_rekening')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('nama_bank')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('ktp')
                    ->label('KTP')
                    ->icon(fn(string $state): string => empty ($state) ? 'heroicon-o-x-circle' : 'heroicon-o-check-badge')
                    ->color(fn(string $state): string => empty ($state) ? 'danger' : 'success')
                    ->size(IconColumnSize::TwoExtraLarge)
                    ->alignCenter()
                    ->action(
                        MediaAction::make('lampiran_ktp')
                            ->media(fn($record) => asset("storage/$record->ktp")),
                    ),
                Tables\Columns\IconColumn::make('sk_pengprov')
                    ->label('SK Pengprov')
                    ->icon(fn(string $state): string => empty ($state) ? 'heroicon-o-x-circle' : 'heroicon-o-check-badge')
                    ->color(fn(string $state): string => empty ($state) ? 'danger' : 'success')
                    ->size(IconColumnSize::TwoExtraLarge)
                    ->alignCenter()
                    ->action(
                        MediaAction::make('lampiran_sk')
                            ->media(fn($record) => asset("storage/$record->sk_pengprov")),
                    ),
                Tables\Columns\IconColumn::make('piagam')
                    ->icon(fn(string $state): string => empty ($state) ? 'heroicon-o-x-circle' : 'heroicon-o-check-badge')
                    ->color(fn(string $state): string => empty ($state) ? 'danger' : 'success')
                    ->size(IconColumnSize::TwoExtraLarge)
                    ->alignCenter()
                    ->action(
                        MediaAction::make('lampiran_piagam')
                            ->media(fn($record) => asset("storage/$record->piagam")),
                    ),
                Tables\Columns\IconColumn::make('foto_medali')
                    ->label('Bukti Medali')
                    ->icon(fn(string $state): string => empty ($state) ? 'heroicon-o-x-circle' : 'heroicon-o-check-badge')
                    ->color(fn(string $state): string => empty ($state) ? 'danger' : 'success')
                    ->size(IconColumnSize::TwoExtraLarge)
                    ->alignCenter()
                    ->action(
                        MediaAction::make('lampiran_foto_medali')
                            ->media(fn($record) => asset("storage/$record->foto_medali")),
                    ),
                Tables\Columns\IconColumn::make('buku_tabungan')
                    ->icon(fn(string $state): string => empty ($state) ? 'heroicon-o-x-circle' : 'heroicon-o-check-badge')
                    ->color(fn(string $state): string => empty ($state) ? 'danger' : 'success')
                    ->size(IconColumnSize::TwoExtraLarge)
                    ->alignCenter()
                    ->action(
                        MediaAction::make('lampiran_buku_tabungan')
                            ->media(fn($record) => asset("storage/$record->buku_tabungan")),
                    ),
                Tables\Columns\ToggleColumn::make('validasi'),
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->recordUrl(null);
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
            'index' => Pages\ListProposalBonusAtlets::route('/'),
            'create' => Pages\CreateProposalBonusAtlet::route('/create'),
            'edit' => Pages\EditProposalBonusAtlet::route('/{record}/edit'),
        ];
    }
}
