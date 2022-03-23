<?php

namespace zoparga\CompanyInformation\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use zoparga\CompanyInformation\CompanyInformationServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'zoparga\\CompanyInformation\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            CompanyInformationServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');


        $migration = include __DIR__.'/../database/migrations/create_multi-address_table.php.stub';
        $migration->up();
    }
}
