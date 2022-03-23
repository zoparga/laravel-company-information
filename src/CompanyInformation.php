<?php

namespace zoparga\CompanyInformation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyInformation extends Model
{
    use SoftDeletes;

    public $table = 'company_information_table';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    protected $fillable = [
        'company_informationeable_id',
        'company_informationeable_type',

        'full_name',
        'main_address',
        'bank_bic',
        'bank_iban',
        'vat',

    ];

    public function CompanyInformationeable()
    {
        return $this->morphTo();
    }


    // /**
    //  * @param $id
    //  * @param $data
    //  *
    //  * @return mixed
    //  */
    public function updateCompanyInformation($id, $data)
    {
        $companyInformation = static::find($id);
        $companyInformation->update($data);

        return $companyInformation;
    }
}
