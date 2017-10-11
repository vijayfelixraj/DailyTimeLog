<?php
/**
 * Project: DailyTimeLog v1.0
 * Purpose: Model for time log table
 * Author: Vijay Felix
 * Review: Loganathan N
 * Date: 4th Sep'17
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyTimeLog extends Model
{
    protected $table = 'dailytimelog';
    public $timestamps = true;
    public $incrementing=false;
    use SoftDeletes;
    protected $fillable = array('id','schedule_on','user_id','project_name','task', 'billable_hrs', 'scheduled_hrs', 'hrs_spent', 'remarks', 'status');
}
