<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-plus-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->options(function () {
                        return Category::query()
                            ->select('id', 'name')
                            ->get()
                            ->mapWithKeys(fn ($category) => [$category->id => $category->name]);
                    })
                    ->required()
                ->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->autofocus()
                    ->placeholder('Enter a name...')
                    ->rules(['string', 'max:255']),
                Forms\Components\TextInput::make('price')
                    ->placeholder('Enter a price...')
                    ->required()
                    ->numeric()
                    ->rules( 'numeric'),
                Forms\Components\Textarea::make('description')
                    ->placeholder('Enter a price...')
                ->columnSpan(2),
                //is active
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->label('Is Active')
                    ->rules(['in:active,inactive'])
                    ->default('active')
                    ->columnSpan(2),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->rules(['image', 'max:1024', 'mimes:jpeg,png,jpg,gif,svg'])
                    ->disk('public')
                    ->directory('products')
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
            ])
            ->filters([
                //
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
            'index' => Pages\ManageProducts::route('/'),
        ];
    }
}
