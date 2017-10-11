@extends('layouts.app')
@section('title',trans('main.dailytimelog.title'))
@section('header')
<h3><i class="icon-message"></i>{!!trans('main.dailytimelog.title') !!}</h3>
@stop
@section('help')
<p class="lead">{!!trans('main.dailytimelog.title') !!}</p>
<p>{!!trans('main.area.help') !!}</p>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {!! trans('main.teamtimelog.title') !!}
                       <span style="font-size: 13px;" class="badge"><?php echo \Carbon\Carbon::now()->format('d-M-Y'); ?></span>				
				 <a href="{!! route('main.teamtimelog.store') !!}" class="btn btn-default" tabidex='8'>{!! trans('main.refresh') !!}</a>
				</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-bordered table-striped" width="100%" id="DailyTimeLog" style="font-size: 13px;">
                        <thead>
                            <tr>
                                <th style="width: 83px;">User</th>
                                <th>Prj.</th>
                                <th style="width: 80px;">Sch. Date</th>
                                <th>Task</th>                               
                                <th style="width: 59px;">Sch. Hrs</th>
								<th style="width: 59px;">Hrs Spent</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$teamtimelog as $timelog)
                            <tr class="odd gradeX">
                                <td>{!! @$timelog->name !!} </td>
                                <td>{!! @$timelog->project_name !!} </td>
                                <td>{!! @$timelog->schedule_on !!} </td>
                                <td>{!! @$timelog->task !!} </td>
                                <td>{!! @$timelog->scheduled_hrs !!} </td>
								<td>{!! @$timelog->hrs_spent !!} </td>
                                <td>{!! @$timelog->status !!} </td>
                                <td>
                                    <a href="{!! route('main.teamtimelog.edit',array($timelog->id)) !!}"><span class="glyphicon glyphicon-edit"></span></a> | 
                                    <a href="{!! route('main.teamtimelog.destroy', array($timelog->id)) !!}"
                                       onclick="return confirm('Are you sure you want to delete this item?');" data-csrf="{!! csrf_token() !!}">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_js')
<script type="text/javascript">
    
    /* To print the current date */
    var m_names = new Array("Jan", "Feb", "Mar", 
"Apr", "May", "Jun", "Jul", "Aug", "Sep", 
"Oct", "Nov", "Dec");

var d = new Date();
var curr_date = d.getDate();
var curr_month = d.getMonth();
var curr_year = d.getFullYear();
var curr_date= curr_date + "-" + m_names[curr_month] + "-" + curr_year;

// To print the data tables
    $(document).ready(function () {
        $('#DailyTimeLog').DataTable(
                {
                    "pageLength": 100,
                    "oSearch": {"sSearch": curr_date}
                }
        );
    });
</script>
@endsection