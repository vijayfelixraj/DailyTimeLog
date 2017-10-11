@extends('layouts.app')
@section('title',trans('main.timelog.add'))
@section('header')
    <h3><i class="icon-message"></i>{{ trans('main.dailytimelog.title') }}</h3>
@stop
@section('help')
    <p class="lead">{{ trans('main.dailytimelog.title') }}</p>
@stop
@section('content')
    {!! Form::open( array('route' => 'main.dailytimelog.store','class'=>'form-vartical', 'accept-charset'=>'utf-8', 'data-toggle' => 'validator')) !!}
	     @include('dailytimelog/partials/_form', ['submit_text' => trans('main.save') ,'btn'=> trans('main.save')])
    {!! Form::close() !!}
@stop
