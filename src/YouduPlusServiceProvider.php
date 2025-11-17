<?php

namespace Youdu\YouduPlus;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Youdu\YouduPlus\Commands\YouduPlusCommand;

class YouduPlusServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('youdu-plus-core')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_youdu_plus_core_table')
            ->hasCommand(YouduPlusCommand::class);
    }
}
