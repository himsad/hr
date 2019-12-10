<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class account
 * @package App\Models
 * @version November 24, 2019, 1:20 pm UTC
 *
 * @property integer user_id
 * @property number balance
 */
class account extends Model
{
    use SoftDeletes;

    public $table = 'accounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'balance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'balance' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'balance' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    
}
