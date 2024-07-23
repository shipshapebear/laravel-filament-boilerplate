<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    // ...
    use HasFactory;
    public function canAccessPanel(Panel $panel): bool
    {
        return true; // @todo Change this to check for access level
    }
}