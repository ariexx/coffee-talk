<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->user()->id),
                Forms\Components\TextInput::make('order_number')
                    ->required()
                    ->autofocus()
                    ->placeholder('Enter a order number...')
                    ->rules('max:255'),
                Forms\Components\TextInput::make('email')
                    ->placeholder('Enter a email...')
                    ->required()
                    ->rules('max:255', 'email'),
                Forms\Components\TextInput::make('name')
                    ->placeholder('Enter a name...')
                    ->required()
                    ->rules('max:255'),
                Forms\Components\TextInput::make('table_number')
                    ->placeholder('Enter a table number...')
                    ->required()
                    ->rules('max:255'),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'delivered' => 'Delivered',
                        'cancelled' => 'Cancelled',
                    ])
                    ->label('Status')
                    ->rules(['in:pending,confirmed,delivered,cancelled'])
                    ->default('pending')
                    ->columnSpan(2),
                Forms\Components\TextInput::make('total_price')
                    ->placeholder('Enter a total price...')
                    ->required()
                    ->numeric()
                    ->rules('numeric')->disabledOn('update'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('table_number')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_price')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TagsColumn::make('orderItems.name')
                    ->label('Order Items')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ManageOrders::route('/'),
        ];
    }
}
