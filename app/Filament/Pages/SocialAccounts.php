<?php

namespace App\Filament\Pages;

use App\Models\SMPlatform;
use Filament\Actions\Action;
use Filament\Pages\Page;

class SocialAccounts extends Page 
{
    protected static ?string $navigationIcon = 'heroicon-o-wifi';

    protected static string $view = 'filament.pages.social-accounts';

    public $socials = null;

    public static function canAccess(): bool 
    {
        return auth()->user()->hasRole('user');
    }

}
