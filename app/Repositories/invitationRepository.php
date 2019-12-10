<?php

namespace App\Repositories;

use App\Models\invitation;
use App\Repositories\BaseRepository;

/**
 * Class invitationRepository
 * @package App\Repositories
 * @version November 24, 2019, 1:37 pm UTC
*/

class invitationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'sender_contact',
        'receiver_user_id',
        'organisation_id',
        'job_id',
        'interview_status',
        'date_of_interview',
        'invitation_note',
        'employer_interview_note',
        'jobseeker_post_interview_review'
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
        return invitation::class;
    }
}
