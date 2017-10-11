<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('main.teamtimelog.title') }}</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Members</label>
                                <div class="controls col-md-6">
                                    {!! Form::select('user_id', @$users, @$teamtimelog->user_id, array('class'=>'form-control','placeholder'=> trans('main.selected'), 'tabindex' => '8')) !!}
                                    @if ($errors->has('user_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('user_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Project Name</label>
                                <div class="col-md-6">
                                    {!! Form::text('project_name', @$teamtimelog->project_name, array('class'=>'form-control', 'placeholder' => 'Project Name', 'tabindex' => '1')) !!}
                                    <!--span class="help-inline">Minimum 5 Characters</span-->
                                    @if ($errors->has('project_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Schedule Date</label>
                                <div class="controls col-md-6">
                                    {!! Form::text('schedule_on', (@$teamtimelog->schedule_on) ? @$teamtimelog->schedule_on : @$date, array('class'=>'form-control', 'tabindex' => '2', 'id' => 'schedule_on', 'data-date-format'=>'dd-M-yyyy')) !!}
                                    @if ($errors->has('schedule_on'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('schedule_on') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Task</label>
                                <div class="controls col-md-6">  
                                    {!! Form::textarea('task', @$teamtimelog->task, array('class'=>'form-control', 'placeholder' => '', 'tabindex' => '3', 'rows' => '5')) !!}
                                    @if ($errors->has('task'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('task') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Schedule Hours</label>
                                <div class="controls col-md-6">
                                    {!! Form::text('scheduled_hrs', (@$teamtimelog->scheduled_hrs) ? @$teamtimelog->scheduled_hrs : '0', array('class'=>'form-control', 'placeholder' => '', 'id'=> 'scheduled_hrs', 'tabindex' => '5')) !!}
                                    @if ($errors->has('scheduled_hrs'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('scheduled_hrs') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Status</label>
                                <div class="controls col-md-6">
                                    {!! Form::select('status', @$status, @$teamtimelog->status, array('class'=>'form-control', 'tabindex' => '8')) !!}
                                    @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput"></label>
                                <div class="controls col-md-10">
                                    <button type="submit" class="btn btn-primary" tabindex="9">{{ @$btn }}</button>
                                    <a href="{!! route('main.teamtimelog.index') !!}" class="btn btn-default" tabidex='10'>{!! trans('main.cancel') !!}</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('page_js')
<script type="text/javascript">
    $('#schedule_on').datetimepicker({ 
        format: 'dd-M-yyyy',
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('#billable_hrs').datetimepicker({
        format: 'hh:ii',
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
    $('#scheduled_hrs').datetimepicker({
        format: 'hh:ii',
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
    $('#hrs_spent').datetimepicker({
        format: 'hh:ii',
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
@endsection