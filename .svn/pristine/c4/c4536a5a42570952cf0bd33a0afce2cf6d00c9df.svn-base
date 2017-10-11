@extends('layouts.app')
@section('title',trans('main.timelog.list'))
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
                <div class="panel-heading">My TimeLog</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-striped" width="100%" id="DailyTimeLog">
                        <thead>
                            <tr>
                                <th>Prj.</th>
                                <th>Sch. Date</th>
                                <th>Task</th>                               
                                <th>Sch Hrs</th>
                                <th>Hrs Spent</th>                                
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$dailytimelog as $timelog)
                                <tr class="odd gradeX">
                                    <td>{!! @$timelog->project_name !!} </td>
                                    <td>{!! @$timelog->schedule_on !!} </td>
                                    <td>{!! @$timelog->task !!} </td>                                  
                                    <td>{!! @$timelog->scheduled_hrs !!} </td>
                                    <td>{!! @$timelog->hrs_spent !!} </td>                                   
                                    <td>{!! @$timelog->status !!} </td>
                                    <td>
                                        <a href="{!! route('main.dailytimelog.edit',array($timelog->id)) !!}"><span class="glyphicon glyphicon-edit"></span></a> 
                                        @if (Auth::user()->user_role == "Administrator") | 
                                        <a href="{!! route('main.dailytimelog.destroy', array($timelog->id)) !!}"
                                        onclick="return confirm('Are you sure you want to delete this item?');" data-csrf="{!! csrf_token() !!}">
                                        <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                        @endif
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
    $(document).ready(function () {
        $('#DailyTimeLog').DataTable(
                {
                    "pageLength": 100                   
                }
        );
    });
</script>

@endsection