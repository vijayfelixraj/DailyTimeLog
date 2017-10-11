@extends('layouts.app')
@section('title',trans('main.user.title'))
@section('header')
<h3><i class="icon-message"></i>{!!trans('main.user.title') !!}</h3>
@stop
@section('help')
<p class="lead">{!!trans('main.user.title') !!}</p>
<p>{!!trans('main.area.help') !!}</p>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-striped" width="100%" id="user">
                        <thead>
                            <tr>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$users as $user)
                                <tr class="odd gradeX">
                                    <td>{!! @$user->name !!} </td>
                                    <td>{!! @$user->email !!} </td>
                                    <td>
                                        <a href="{!! route('main.user.edit',array($user->id)) !!}"><span class="glyphicon glyphicon-edit"></span></a> | 
                                        <a href="{!! route('main.user.destroy', array($user->id)) !!}"
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
    $(document).ready(function(){
        $('#user').DataTable(
		{
                    "pageLength": 100,                    
                }
		);
    });
</script>
@endsection