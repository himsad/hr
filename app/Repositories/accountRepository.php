<?php

namespace App\Repositories;

use App\Models\account;
use App\Repositories\BaseRepository;

/**
 * Class accountRepository
 * @package App\Repositories
 * @version November 24, 2019, 1:20 pm UTC
*/

class accountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'balance'
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
        return account::class;
    }
}
