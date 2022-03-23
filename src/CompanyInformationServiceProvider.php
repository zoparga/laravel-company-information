<?php

namespace zoparga\CompanyInformation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use zoparga\CompanyInformation\Commands\CompanyInformationCommand;

class CompanyInformationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('company-information')
            //->hasConfigFile()
            //->hasViews()
            ->hasMigration('create_company-information_table');
        //->hasCommand(CompanyInformationCommand::class);
    }
}
