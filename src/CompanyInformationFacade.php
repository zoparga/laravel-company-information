<?php

namespace zoparga\CompanyInformation;

use Illuminate\Support\Facades\Facade;

/**
 * @see \zoparga\CompanyInformation\CompanyInformation
 */
class CompanyInformationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-company-information';
    }
}
