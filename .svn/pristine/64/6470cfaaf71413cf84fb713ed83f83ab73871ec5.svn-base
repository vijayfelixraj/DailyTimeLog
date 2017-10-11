<?php
/**
 * Project: DailyTimeLog v1.0
 * Purpose: Model for user table
 * Author: Vijay Felix
 * Review: Loganathan N
 * Date: 4th Sep'17
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    protected $table = 'users';
    public $timestamps = true;
    public $incrementing=false;
    use SoftDeletes;
    protected $fillable = array('id','name','email','password','user_role');
}
