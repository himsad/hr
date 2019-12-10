<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class organisationuser
 * @package App\Models
 * @version November 24, 2019, 1:41 pm UTC
 *
 * @property integer user_id
 * @property integer organisation_id
 * @property string start_date
 * @property string end_date
 * @property string role
 */
class organisationuser extends Model
{
    use SoftDeletes;

    public $table = 'organisation_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'organisation_id',
        'start_date',
        'end_date',
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'organisation_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'organisation_id' => 'required'
    ];

    
}
