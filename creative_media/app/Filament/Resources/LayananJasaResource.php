<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananJasaResource\Pages;
use App\Models\LayananJasa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class LayananJasaResource extends Resource
{
    protected static ?string $model = LayananJasa::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Website Content';
    protected static ?string $navigationLabel = 'Layanan Jasa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('kategori')
                    ->options([
                        'Branding & Design' => 'Branding & Design',
                        'Web Development' => 'Web Development',
                        'Mobile Apps' => 'Mobile Apps',
                        'Course & Training' => 'Course & Training',
                    ])
                    ->required(),

                Forms\Components\Textarea::make('deskripsi')
                    ->maxLength(65535)
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('icon')
                    ->image()
                    ->directory('layanan/icons'),

                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('layanan/images')
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('konten')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('status')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->badge(),
                Tables\Columns\ImageColumn::make('icon')
                    ->circular(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori')
                    ->options([
                        'Branding & Design' => 'Branding & Design',
                        'Web Development' => 'Web Development',
                        'Mobile Apps' => 'Mobile Apps',
                        'Course & Training' => 'Course & Training',
                    ])
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
            'index' => Pages\ListLayananJasas::route('/'),
            'create' => Pages\CreateLayananJasa::route('/create'),
            'edit' => Pages\EditLayananJasa::route('/{record}/edit'),
        ];
    }
}
