<?php

namespace zoparga\CompanyInformation\Traits;

use Illuminate\Database\Eloquent\Model;
use zoparga\CompanyInformation\CompanyInformation;

trait CompanyInformationeableTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function companyInformations()
    {
        return $this->morphMany(CompanyInformation::class, 'company_informationeable');
    }

    public function getLatestCompanyInformations()
    {
        return $this->morphMany(CompanyInformation::class, 'company_informationeable')->orderBy('id', 'desc');
    }

    public function getLastCompanyInformation()
    {
        return $this->morphMany(CompanyInformation::class, 'company_informationeable')->orderBy('id', 'desc')->first();
    }

    /**
     * @param $data
     * @param $author
     * @param $parent
     *
     * @return mixed
     */
    public function createCompanyInformation($data)
    {
        return (new CompanyInformation())->createCompanyInformation($this, $data);
    }

    /**
     * @param $id
     * @param $data
     * @param $parent
     *
     * @return mixed
     */
    public function updateCompanyInformation($id, $data, Model $parent = null)
    {
        return (new CompanyInformation())->updateCompanyInformation($id, $data);
    }
}
