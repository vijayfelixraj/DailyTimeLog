<?php
/**
 * Project: DailyTimeLog v1.0
 * Purpose: Controller for Users
 * Author: Vijay Felix
 * Review: Loganathan N
 * Date: 4th Sep'17
 */

namespace App\Http\Controllers;

use Auth;
use Redirect;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UserUpdateProfileRequest;

class UsersController extends Controller
{
    protected $folder = 'contact';
    protected $route = 'main.user.index';
    protected $success = 'success';
    protected $error = 'error';
    protected $notfound = 'main.user.notfound';
    protected $createmsg = 'main.user.createsuccess';
    protected $updatemsg = 'main.user.updatesuccess';
    protected $deletemsg = 'main.user.deletesuccess';
    protected $profileupdatemsg = 'main.user.profileupdate';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = Users::where('user_role', 'User')->get();
        return view('user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = array();
        return view('user.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        Users::create($input);
        return Redirect::route($this->route)->with($this->success, trans($this->createmsg));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = Users::findorfail($id);
        return view('user.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
        $input = $request->all();
        $dailyTimeLog = Users::findorFail($id);
        if (empty($input['password'])) {
            $input['password'] = $dailyTimeLog->password;
        }
        $input['password'] = bcrypt($input['password']);
        $dailyTimeLog->fill($input);
        $dailyTimeLog->save();
        return Redirect::route($this->route)->with($this->success, trans($this->updatemsg));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }

    /**
     * To view the Profiles
     */
    public function profileView($id)
    {
        $data['user'] = Users::findorfail($id);
        $data['btn'] = trans('main.update');
        return view('user.updateProfile', $data);
    }

    /**
     * To update the Profile
     */
    public function updateProfile(UserUpdateProfileRequest $request, $id)
    {

        $input = $request->all();
        $userData = Users::findorfail($id);
        if (empty($input['password'])) {
            $input['password'] = $userData->password;
        }
        $input['password'] = bcrypt($input['password']);
        $userData->fill($input);
        $userData->save();
        return Redirect::back()->with($this->success, trans($this->profileupdatemsg));
    }
}
