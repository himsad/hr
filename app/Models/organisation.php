<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class organisation
 * @package App\Models
 * @version November 24, 2019, 1:39 pm UTC
 *
 * @property integer user_id
 * @property string name
 * @property string description
 * @property string city
 * @property string state
 * @property string country_id
 * @property string contact_details
 */
class organisation extends Model
{
    use SoftDeletes;

    public $table = 'organisations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'name',
        'description',
        'city',
        'state',
        'country_id',
        'contact_details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country_id' => 'string',
        'contact_details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'name' => 'required',
        'description' => 'required'
    ];

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }


    
}
