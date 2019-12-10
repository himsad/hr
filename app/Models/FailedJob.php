<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FailedJob
 * @package App\Models
 * @version November 24, 2019, 1:24 pm UTC
 *
 * @property string connection
 * @property string queue
 * @property string payload
 * @property string exception
 * @property string|\Carbon\Carbon failed_at
 */
class FailedJob extends Model
{
    use SoftDeletes;

    public $table = 'failed_jobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'connection',
        'queue',
        'payload',
        'exception',
        'failed_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'connection' => 'string',
        'queue' => 'string',
        'payload' => 'string',
        'exception' => 'string',
        'failed_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'connection' => 'required',
        'queue' => 'required',
        'payload' => 'required',
        'exception' => 'required',
        'failed_at' => 'required'
    ];

    
}
