<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.settings';

    protected static ?string $slug = 'settings';

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('user');
    }
}
