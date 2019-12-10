<?php

namespace App\Repositories;

use App\Models\country;
use App\Repositories\BaseRepository;

/**
 * Class countryRepository
 * @package App\Repositories
 * @version November 24, 2019, 1:23 pm UTC
*/

class countryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'currency',
        'phone',
        'flag'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return country::class;
    }
}
