<?php
/**
 * Project: DailyTimeLog v1.0
 * Purpose: Controller for Daily Time Log
 * Author: Vijay Felix
 * Review: Loganathan N
 * Date: 4th Sep'17
 */

namespace App\Http\Controllers;

use Auth;
use Redirect;
use App\Models\Users;
use App\Models\DailyTimeLog;
//use Illuminate\Http\Request;
use App\Helpers\DailyTimeLogHelper;
use App\Http\Requests\DailyTimeLogRequest;

class DailyTimeLogController extends Controller
{
    protected $folder = 'contact';
    protected $route = 'main.dailytimelog.index';
    protected $success = 'success';
    protected $error = 'error';
    protected $notfound = 'main.dailytimelog.notfound';
    protected $createmsg = 'main.dailytimelog.createsuccess';
    protected $updatemsg = 'main.dailytimelog.updatesuccess';
    protected $deletemsg = 'main.dailytimelog.deletesuccess';
    /**
     * Display a listing of the resource.
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['status'] = DailyTimeLogHelper::getStatus();
        $data['date'] = date("d-M-Y");
        $data['dailytimelog'] = array();
        return view('dailytimelog.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DailyTimeLogRequest $request)
    {
        $input = $request->all();
        if (empty($input['user_id'])) {
            $input['user_id'] = Auth::user()->id;
        }
        $input['schedule_on'] = DailyTimeLogHelper::formatDate($input['schedule_on']);
        $input['hrs_spent'] = ($input['hrs_spent']) ? $input['hrs_spent'] : "00:00:00";
    //    $input['billable_hrs'] = ($input['billable_hrs']) ? $input['billable_hrs'] : "00:00:00";
        DailyTimeLog::create($input);
        return Redirect::route($this->route)->with($this->success, trans($this->createmsg));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DailyTimeLog  $dailyTimeLog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DailyTimeLog  $dailyTimeLog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['dailytimelog'] = DailyTimeLog::findorfail($id);
        $data['dailytimelog']->schedule_on = DailyTimeLogHelper::getDateFormat($data['dailytimelog']->schedule_on, 'dd-M-yyyy');
        $data['status'] = DailyTimeLogHelper::getStatus();
        return view('dailytimelog.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DailyTimeLog  $dailyTimeLog
     * @return \Illuminate\Http\Response
     */
    public function update(DailyTimeLogRequest $request, $id)
    {
        $input = $request->all();
        $input['schedule_on'] = DailyTimeLogHelper::formatDate($input['schedule_on']);
        $input['hrs_spent'] = ($input['hrs_spent']) ? $input['hrs_spent'] : "00:00:00";
      //  $input['billable_hrs'] = ($input['billable_hrs']) ? $input['billable_hrs'] : "00:00:00";
        $dailyTimeLog  = DailyTimeLog::findorFail($id);
        $dailyTimeLog->fill($input);
        $dailyTimeLog->save();
        return Redirect::route($this->route)->with($this->success, trans($this->updatemsg));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DailyTimeLog  $dailyTimeLog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dailytimelog = DailyTimeLog::findorFail($id);
        $dailytimelog->delete();
        return Redirect::route($this->route)->with($this->error, trans($this->deletemsg));
    }

}
