<?php

namespace Codio\PackageTraining;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Codio\PackageTraining\Commands\PackageTrainingCommand;

class PackageTrainingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('package-training')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_package-training_table')
            ->hasCommand(PackageTrainingCommand::class);
    }
}
