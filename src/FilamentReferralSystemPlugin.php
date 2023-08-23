<?php

namespace IbrahimBougaoua\FilamentReferralSystem;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentReferralSystemPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-referral-system';
    }

    public function register(Panel $panel): void
    {

    }

    public function boot(Panel $panel): void
    {
        //
    }
}
