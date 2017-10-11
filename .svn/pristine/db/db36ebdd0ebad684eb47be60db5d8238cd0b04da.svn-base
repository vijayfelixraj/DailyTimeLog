@extends('layouts.app')
@section('title',trans('main.user.profile'))
@section('header')
    <h3>
        <i class="icon-message"></i>{!!trans('main.user.profile') !!}
    </h3>
@stop
@section('page_style')
<style type="text/css">
	[data-tooltip] {
	      cursor: default;
	      font: normal 1em sans-serif;
	  }

	  [data-tooltip]:hover:after {
	      display: block;
	      content: attr(data-tooltip);
	      white-space: pre-wrap;
	      color: #f00;
	  }
</style>
@stop
@section('content')
<!--sidebar end-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{!! trans('main.user.profile') !!}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-horizontal">
					{!! Form::open( array('route' => array('main.user.updateProfile', $user->id),'method'=>'PUT', 'class'=>'form-vartical', 'accept-charset'=>'utf-8', 'enctype' => 'multipart/form-data')) !!}
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
                        <label class="control-label col-md-2" for="basicinput"></label>
                        <div class="controls col-md-10">
                            <button type="submit" class="btn btn-primary" tabindex="7">{{ @$btn }}</button>                           
                        </div>
                    </div>
			{!! Form::close() !!}
			</div>
@stop