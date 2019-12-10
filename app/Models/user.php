<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class user
 * @package App\Models
 * @version November 24, 2019, 3:33 pm UTC
 *
 * @property string name
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string status
 * @property string role_id
 * @property string city
 * @property string state
 * @property string country_id
 * @property string skills
 * @property boolean is_actively_seeking_employment
 * @property string remember_token
 */
class user extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'status',
        'role_id',
        'city',
        'state',
        'country_id',
        'skills',
        'is_actively_seeking_employment',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'status' => 'string',
        'role_id' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country_id' => 'string',
        'skills' => 'string',
        'is_actively_seeking_employment' => 'boolean',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'is_actively_seeking_employment' => 'required'
    ];

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    } 
    public function invitations()
    {
        return $this->hasMany('App\Models\Invitation');
    }
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    
}
