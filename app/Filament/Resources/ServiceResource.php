<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Content';
    
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $state, Forms\Set $set) => $set('slug', \Illuminate\Support\Str::slug($state))),
                
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                
                Forms\Components\Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),
                
                Forms\Components\RichEditor::make('long_description')
                    ->columnSpanFull(),
                
                Forms\Components\TextInput::make('duration')
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('price')
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('icon')
                    ->maxLength(255)
                    ->helperText('Heroicon name (e.g., heroicon-o-heart)'),
                
                Forms\Components\Toggle::make('featured')
                    ->default(false),
                
                Forms\Components\Toggle::make('published')
                    ->default(true),
                
                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('duration'),
                
                Tables\Columns\TextColumn::make('price'),
                
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
                
                Tables\Columns\IconColumn::make('published')
                    ->boolean(),
                
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('featured'),
                Tables\Filters\TernaryFilter::make('published'),
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
            ->defaultSort('order');
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
