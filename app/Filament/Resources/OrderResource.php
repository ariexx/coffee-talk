<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use BaconQrCode\Renderer\Path\Close;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->user()->id),
                Forms\Components\TextInput::make('order_number')
                    ->required()
                    ->disabled('true')
                    ->autofocus()
                    ->placeholder('Enter a order number...')
                    ->default(fn() => time())
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
                Forms\Components\Repeater::make('orderItems')
                    ->relationship()
                    ->schema([
                        Forms\Components\Select::make('name')
                            ->placeholder('Select a product...')
                            ->reactive()
                            ->options(Product::all()->pluck('name',  'name'))
                            ->afterStateUpdated(function ($state, callable $set) {
                                $product = Product::where('name', $state)->first();
                                if ($product) {
                                    $set('price', $product->price);
                                    $set('product_id', $product->id);
                                }
                                session()->put('edit_price_product', $product->price);
                            })
                            ->required()
                            ->rules('string'),
                        Forms\Components\TextInput::make('quantity')
                            ->placeholder('Enter a quantity...')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function ($state, \Closure $set) {
                                $productPrice = $state * session()->get('edit_price_product');
                                cache()->put('total_price_order', $productPrice);
                                $set('total_price', $productPrice);
                                $set('price', $productPrice);
                            })
                            ->numeric()
                            ->rules('numeric'),
                        Forms\Components\TextInput::make('price')
                            ->dehydrated()
                            ->disabled()
                            ->rules(['numeric', 'required']),
                        Forms\Components\Hidden::make('product_id')
                            ->dehydrated()
                            ->rules(['numeric', 'required']),
                    ])
                    ->columnSpan(2),
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
                Tables\Columns\TextColumn::make(uniqid())
                    ->label('Total Price')
                    ->default(fn($record) => $record->orderItems()->sum('price'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TagsColumn::make('orderItems.name')
                    ->label('Order Items')
                    ->sortable()
                    ->searchable()
                ,
                Tables\Columns\TextColumn::make('created_at')
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
