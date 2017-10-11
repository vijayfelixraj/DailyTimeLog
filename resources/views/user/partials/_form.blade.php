<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('main.user.title') }}</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-2">Username</label>
                                <div class="col-md-6">
                                    {!! Form::text('name', @$user->name, array('class'=>'form-control', 'placeholder' => 'Enter Username', 'tabindex' => '1')) !!}
                                    <!--span class="help-inline">Minimum 5 Characters</span-->
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Email</label>
                                <div class="controls col-md-6">
                                    {!! Form::email('email', @$user->email, array('class'=>'form-control', 'tabindex' => '2', 'id' => 'email', 'placeholder' => 'Enter Email')) !!}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Password</label>
                                <div class="controls col-md-6">  
                                    {{ Form::password('password', array('class' => 'form-control', 'tabindex' => '3', 'placeholder' => 'Enter Password')) }}
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">User Role</label>
                                <div class="controls col-md-6">
                                    {!! Form::select('user_role', ['User'=> 'User'],@$user->user_role, array('class'=>'form-control', 'id'=> 'user_role', 'tabindex' => '5')) !!}
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput"></label>
                                <div class="controls col-md-10">
                                    <button type="submit" class="btn btn-primary" tabindex="7">{{ @$btn }}</button>
                                    <a href="{!! route('main.user.index') !!}" class="btn btn-default" tabidex='8'>{!! trans('main.cancel') !!}</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>