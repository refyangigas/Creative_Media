<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionResource\Pages;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Beranda';
    protected static ?string $navigationLabel = 'Konten Sections';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kode')
                    ->options([
                        'about_us' => 'Tentang Kami',
                        'services' => 'Layanan',
                        'why_us' => 'Mengapa Kami',
                        'counter' => 'Statistik/Counter',
                        'promo' => 'Promo',
                    ])
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('sections'),
                Forms\Components\RichEditor::make('konten')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('status')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode')
                    ->badge(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->circular(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tidak perlu bulk actions karena section biasanya tidak dihapus
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }
}
