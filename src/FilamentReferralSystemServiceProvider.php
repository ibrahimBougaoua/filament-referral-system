<?php

namespace IbrahimBougaoua\FilamentReferralSystem;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IbrahimBougaoua\FilamentReferralSystem\Commands\FilamentReferralSystemCommand;

class FilamentReferralSystemServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-referral-system')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-referral-system_table')
            ->hasCommand(FilamentReferralSystemCommand::class);
    }
}
