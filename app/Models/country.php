<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class country
 * @package App\Models
 * @version November 24, 2019, 1:23 pm UTC
 *
 * @property string name
 * @property string code
 * @property string currency
 * @property string phone
 * @property string flag
 */
class country extends Model
{
    use SoftDeletes;

    public $table = 'countries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'code',
        'currency',
        'phone',
        'flag'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'currency' => 'string',
        'phone' => 'string',
        'flag' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
    
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
    
    
}
