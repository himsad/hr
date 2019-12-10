<?php

namespace App\Repositories;

use App\Models\job;
use App\Repositories\BaseRepository;

/**
 * Class jobRepository
 * @package App\Repositories
 * @version November 24, 2019, 1:38 pm UTC
*/

class jobRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'title',
        'skills_required',
        'description',
        'work_type',
        'job_type',
        'status',
        'organisation_id',
        'country_id'
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
        return job::class;
    }
}
