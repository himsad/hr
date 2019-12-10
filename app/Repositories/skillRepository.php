<?php

namespace App\Repositories;

use App\Models\skill;
use App\Repositories\BaseRepository;

/**
 * Class skillRepository
 * @package App\Repositories
 * @version November 24, 2019, 3:33 pm UTC
*/

class skillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'user_id',
        'start_date',
        'skill_level',
        'past_work_history',
        'any_other_information',
        'admin_interview',
        'admin_user_id',
        'score',
        'interview_status',
        'interview_amount_paid'
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
        return skill::class;
    }
}
