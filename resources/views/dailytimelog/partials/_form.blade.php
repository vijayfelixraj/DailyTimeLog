<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('main.dailytimelog.title') }}</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-2">Project</label>
                                <div class="col-md-6">
                                    {!! Form::text('project_name', @$dailytimelog->project_name, array('class'=>'form-control', 'placeholder' => 'Project Name', 'tabindex' => '1')) !!}                                  
                                    @if ($errors->has('project_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4">   <span class="help-inline" style="color: #555;">Eg: KRQ, MAR</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Schedule Date</label>
                                <div class="controls col-md-6">
                                    {!! Form::text('schedule_on', (@$dailytimelog->schedule_on) ? @$dailytimelog->schedule_on : @$date, array('class'=>'form-control', 'tabindex' => '2', 'id' => 'schedule_on', 'data-date-format'=>'dd-M-yyyy')) !!}
                                    @if ($errors->has('schedule_on'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('schedule_on') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="controls col-md-4" style="color: #555;">Eg: 02-Sep-2017
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Task</label>
                                <div class="controls col-md-6">  
                                    {!! Form::textarea('task', @$dailytimelog->task, array('class'=>'form-control', 'placeholder' => '', 'tabindex' => '3', 'rows' => '2')) !!}
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Schedule Hours</label>
                                <div class="controls col-md-6">
                                    {!! Form::text('scheduled_hrs', (@$dailytimelog->scheduled_hrs) ? @$dailytimelog->scheduled_hrs : '0', array('class'=>'form-control', 'placeholder' => '', 'id'=> 'scheduled_hrs', 'tabindex' => '5')) !!}
                                </div>
                                <div class="controls col-md-4" style="color: #555;">Eg: 02:30
                                </div>
                            </div>
                             @if (Auth::user()->user_role == "Administrator")
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Billable Hours</label>
                                <div class="controls col-md-6">
                                    {!! Form::text('billable_hrs', (@$dailytimelog->billable_hrs) ? @$dailytimelog->billable_hrs : '0', array('class'=>'form-control', 'placeholder' => '', 'tabindex' => '4', 'id' => 'billable_hrs')) !!}
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                              @endif
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Hours Spent</label>
                                <div class="controls col-md-6">
                                    {!! Form::text('hrs_spent', (@$dailytimelog->hrs_spent) ? @$dailytimelog->hrs_spent : '0', array('class'=>'form-control', 'placeholder' => '', 'tabindex' => '6', 'id'=> 'hrs_spent')) !!}
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            @if (Auth::user()->user_role == "Administrator")
                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Remarks</label>
                                <div class="controls col-md-6">
                                    {!! Form::textarea('remarks', @$dailytimelog->remarks, array('class'=>'form-control', 'placeholder' => '', 'tabindex' => '7', 'rows' => '5')) !!}
                                </div>
                                <div class="controls col-md-4">
                                </div>
                            </div>
                            @endif

                            <div class="form-group">
                                <label class="control-label col-md-2" for="basicinput">Status</label>
                                <div class="controls col-md-6">
                                    {!! Form::select('status', @$status, @$dailytimelog->status, array('class'=>'form-control', 'tabindex' => '8')) !!}
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
                                    <a href="{!! route('main.dailytimelog.index') !!}" class="btn btn-default" tabidex='10'>{!! trans('main.cancel') !!}</a>
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