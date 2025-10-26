<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

//                Forms\Components\Placeholder::make('debug')
//                    ->content(function ($record) {
//                        if (!$record) {
//                            return 'No record';
//                        }
//
//                        $images = \App\Models\ProductImage::where('product_id', $record->id)->get();
//
//                        return 'Product ID: ' . $record->id . ' | Images count: ' . $images->count() . ' | Paths: ' . $images->pluck('path')->toJson();
//                    }),

                Forms\Components\Section::make('Product Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(5),

                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('₦')
                            ->step(0.01),

                        Forms\Components\TextInput::make('stock')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->minValue(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])->columns(2),

                Forms\Components\Section::make('Product Images')
                    ->schema([
                        Forms\Components\Repeater::make('images')
                            ->relationship('images', fn ($query) => $query->orderBy('position', 'asc'))
                            ->reorderable('position')
                            ->schema([
                                Forms\Components\FileUpload::make('path')
                                    ->image()
                                    ->disk('public')
                                    ->visibility('public')
                                    ->storeFileNamesIn('original_filename')
                                    ->required()
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        '1:1',
                                        '4:3',
                                    ])
                                ,


                                Forms\Components\TextInput::make('position')
                                    ->numeric()
                                    ->default(0)
                                    ->label('Display Order'),

                                Forms\Components\Toggle::make('is_primary')
                                    ->label('Primary Image')
                                    ->helperText('The main image shown on product listings'),
                            ])
                            ->orderColumn('position')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string =>
                            $state['is_primary'] ? '⭐ Primary Image' : 'Image'
                            )
                            ->minItems(1)
                            ->defaultItems(1),
                    ]),

                Forms\Components\Section::make('Ratings')
                    ->schema([
                        Forms\Components\TextInput::make('average_rating')
                            ->numeric()
                            ->disabled()
                            ->suffix('/ 5'),

                        Forms\Components\TextInput::make('ratings_count')
                            ->numeric()
                            ->disabled()
                            ->suffix('ratings'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('primaryImage.path')
                    ->label('Image')
                    ->getStateUsing(fn ($record) => $record->primaryImage ? asset('storage/' . $record->primaryImage->path) : null)
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->money('NGN')
                    ->sortable(),

                Tables\Columns\TextColumn::make('stock')
                    ->sortable()
                    ->badge()
                    ->color(fn (int $state): string => match (true) {
                        $state === 0 => 'danger',
                        $state < 10 => 'warning',
                        default => 'success',
                    }),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\TextColumn::make('average_rating')
                    ->label('Rating')
                    ->formatStateUsing(fn ($state) => $state ? "⭐ {$state}" : 'No ratings'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Products'),

                Tables\Filters\Filter::make('out_of_stock')
                    ->query(fn ($query) => $query->where('stock', 0))
                    ->label('Out of Stock'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
