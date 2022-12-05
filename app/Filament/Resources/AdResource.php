<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdResource\Pages;
use App\Filament\Resources\AdResource\RelationManagers;
use App\Models\Ad;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AdResource extends Resource
{
    protected static ?string $model = Ad::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->rules(['image', 'max:2048', 'mimetypes:image/jpeg,image/png'])
                    ->disk('public')
                    ->directory('ads'),
                Forms\Components\RichEditor::make('description')
                    ->nullable()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'heading',
                        'h2',
                        'h3',
                        'bulletList',
                        'orderedList',
                        'table',
                        'horizontalRule',
                        'undo',
                        'redo',
                    ])
                    ->disableToolbarButtons([
                        'attachFiles',
                        'link',
                        'image',
                        'codeBlock',
                    ])
                    ->columnSpanFull()
                    ->placeholder('Enter a description...')
                    ->label('Description')
                    ->rules(['nullable', 'string', 'max:65535']),
                Forms\Components\Toggle::make('active')
                    ->required()
                    ->columnSpan(2)
                    ->rules(['boolean']),
                Forms\Components\TextInput::make('link')
                    ->nullable()
                    ->rule('url'),
                Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'banner' => 'Banner',
                        'promo' => 'Promo',
                    ])
                    ->label('Type')
                    ->rules(['in:banner,promo'])
                    ->default('banner')
                    ->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAds::route('/'),
        ];
    }
}
