<?php

namespace zoparga\CompanyInformation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use zoparga\CompanyInformation\CompanyInformation;

class ModelFactory extends Factory
{
    protected $model = CompanyInformation::class;


    public function definition()
    {
        return [
            'CompanyInformationeable_id' => 1,
            'CompanyInformationeable_type' => 'App\Models\User',
            'type' => 'main address',
            'country' => 'Hungary',
            'zip' => '1010',
            'city' => 'Budapest',
            'street' => 'Fő utca 1.',
            'address_longitude' => '40.0000',
            'address_latitude' => '40.0000',
        ];
    }
}
