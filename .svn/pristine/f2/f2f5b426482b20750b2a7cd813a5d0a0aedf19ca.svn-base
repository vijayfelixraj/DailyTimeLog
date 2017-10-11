<?php
/**
 * Project: DailyTimeLog v1.0
 * Purpose: Controller for TeamTimelog
 * Author: Vijay Felix
 * Review: Loganathan N
 * Date: 4th Sep'17
 */

namespace App\Http\Controllers;

use DB;
use Auth;
use Redirect;
use App\Models\Users;
use App\Models\DailyTimeLog;
use Illuminate\Http\Request;
use App\Helpers\DailyTimeLogHelper;
use App\Http\Requests\TeamTimeLogRequest;

class TeamTimeLogController extends Controller
{
    protected $folder = 'contact';
    protected $route = 'main.teamtimelog.index';
    protected $success = 'success';
    protected $error = 'error';
    protected $notfound = 'main.teamtimelog.notfound';
    protected $createmsg = 'main.teamtimelog.createsuccess';
    protected $updatemsg = 'main.teamtimelog.updatesuccess';
    protected $deletemsg = 'main.teamtimelog.deletesuccess';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teamtimelog'] = DB::select('SELECT dailytimelog.*,users.name,users.user_role FROM `dailytimelog` JOIN `users` ON dailytimelog.user_id=users.id WHERE users.user_role = "User" and dailytimelog.deleted_at IS NULL'); 
        $count_team_timelog = count($data['teamtimelog']);        
        if ( $count_team_timelog > 0) {
            for ($i=0; $i <  $count_team_timelog; $i++) { 
                   $data['teamtimelog'][$i]->schedule_on = DailyTimeLogHelper::getDateFormat($data['teamtimelog'][$i]->schedule_on);
            }    
        }
        return view('teamtimelog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['status'] = DailyTimeLogHelper::getStatus();
        $data['users'] = Users::where('user_role', 'User')->pluck('name', 'id')->all();
        $data['date'] = date("d-M-Y");
        return view('teamtimelog.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamTimeLogRequest $request)
    {
        $input = $request->all();
        $input['schedule_on'] = DailyTimeLogHelper::formatDate($input['schedule_on']);
        DailyTimeLog::create($input);
        return Redirect::route($this->route)->with($this->success, trans($this->createmsg));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['teamtimelog'] = DailyTimeLog::findorfail($id); 
        $data['status'] = DailyTimeLogHelper::getStatus();
        $data['users'] = Users::where('user_role', 'User')->pluck('name', 'id')->all();
        $data['date'] = date("d-M-Y");
        return view('teamtimelog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamTimeLogRequest $request, $id)
    {
        $input = $request->all();
        $dailyTimeLog  = DailyTimeLog::findorFail($id);
        $input['schedule_on'] = DailyTimeLogHelper::formatDate($input['schedule_on']);
        $dailyTimeLog->fill($input);
        $dailyTimeLog->save();
        return Redirect::route($this->route)->with($this->success, trans($this->updatemsg));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dailytimelog = DailyTimeLog::findorfail($id);
        $dailytimelog->delete();
        return Redirect::route($this->route)->with($this->error, trans($this->deletemsg));
    }
}
