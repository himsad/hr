<?php

namespace App\Repositories;

use App\Models\organisation;
use App\Repositories\BaseRepository;

/**
 * Class organisationRepository
 * @package App\Repositories
 * @version November 24, 2019, 1:39 pm UTC
*/

class organisationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'name',
        'description',
        'city',
        'state',
        'country_id',
        'contact_details'
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
        return organisation::class;
    }
}
