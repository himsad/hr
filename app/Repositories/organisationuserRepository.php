<?php

namespace App\Repositories;

use App\Models\organisationuser;
use App\Repositories\BaseRepository;

/**
 * Class organisationuserRepository
 * @package App\Repositories
 * @version November 24, 2019, 1:41 pm UTC
*/

class organisationuserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'organisation_id',
        'start_date',
        'end_date',
        'role'
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
        return organisationuser::class;
    }
}
