<?php

namespace App\Repositories;

use App\Models\FailedJob;
use App\Repositories\BaseRepository;

/**
 * Class FailedJobRepository
 * @package App\Repositories
 * @version November 24, 2019, 1:24 pm UTC
*/

class FailedJobRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'connection',
        'queue',
        'payload',
        'exception',
        'failed_at'
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
        return FailedJob::class;
    }
}
