# Add many address to many model with a single trait. E.g.: many shipping address for a customer.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zoparga/laravel-company-information.svg?style=flat-square)](https://packagist.org/packages/zoparga/laravel-company-information)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/zoparga/laravel-company-information/run-tests?label=tests)](https://github.com/zoparga/laravel-company-information/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/zoparga/laravel-company-information/Check%20&%20fix%20styling?label=code%20style)](https://github.com/zoparga/laravel-company-information/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zoparga/laravel-company-information.svg?style=flat-square)](https://packagist.org/packages/zoparga/laravel-company-information)



## Installation

You can install the package via composer:

```bash
composer require zoparga/laravel-company-information
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="zoparga\CompanyInformation\CompanyInformationServiceProvider" --tag="company-information-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="zoparga\CompanyInformation\CompanyInformationServiceProvider" --tag="laravel-company-information-config"
```

This is the contents of the published config file:

## Usage

- publish migration file
- migrate
- add trait to model
- use it

## Prepare model


use zoparga\CompanyInformation\Traits\CompanyInformationeableTrait;

class {{model}} extends Model
{
    use CompanyInformationeableTrait;
}

```php

$model = \App\Models\Model::find(1);

$model->companyInformations()->create([
    'full_name' => 'YOUR INFORMATION',
    'main_address' => 'YOUR INFORMATION',
    'bank_bic' => 'YOUR INFORMATION',
    'bank_iban' => 'YOUR INFORMATION',
    'vat' => 'YOUR INFORMATION',
]);

$companyInformationId = 1;

$model->updateCompanyInformation($companyInformationId, [
    'full_name' => 'YOUR INFORMATION',
    'main_address' => 'YOUR INFORMATION',
    'bank_bic' => 'YOUR INFORMATION',
    'bank_iban' => 'YOUR INFORMATION',
    'vat' => 'YOUR INFORMATION',
]);

Get the addresses, order by ID - desc
Or you can limit it here
$model->getLatestCompanyInformationes()->get();

Or you can limit it here
$model->getLatestCompanyInformationes()->limit(3)->get();

Of course you can get last created address
$model->getLastCompanyInformation();


```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Papp Zoltán](https://github.com/zoparga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
