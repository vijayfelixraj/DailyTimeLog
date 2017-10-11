<?php
/**
 * Project: DailyTimeLog v1.0
 * Purpose: Controller for Home
 * Author: Vijay Felix
 * Review: Loganathan N
 * Date: 4th Sep'17
 */

namespace App\Http\Controllers;

use Auth;
use Redirect;
use App\Models\DailyTimeLog;
use Illuminate\Http\Request;
use App\Helpers\DailyTimeLogHelper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->id) {
            $data['dailytimelog'] = DailyTimeLog::orderBy('id', 'desc')->where('user_id', '=', Auth::user()->id)->get();
        }
        if (count($data['dailytimelog']) > 0) {
            for ($i=0; $i < count($data['dailytimelog']); $i++) { 
                   $data['dailytimelog'][$i]->schedule_on = DailyTimeLogHelper::getDateFormat($data['dailytimelog'][$i]->schedule_on);
            }    
        }
        return view('dailytimelog.index', $data);
    }
}
