@extends('layouts.app')
@section('title',trans('main.timelog.edit'))
@section('header')
    <h3>
        <i class="icon-message"></i>{!!trans('main.dailytimelog.title') !!}
    </h3>
@stop
@section('help')
    <p class="lead">{!!trans('main.dailytimelog.title') !!}</p>
    <p>{!!trans('main.dailytimelog.help') !!}</p>
@stop
@section('content')
    {!! Form::open(array('route' => array('main.dailytimelog.update',$dailytimelog->id),'method'=>'PUT','class' => 'form-vartical row-border','data-toggle'=>"validator",'files' => true)) !!}
    @include('dailytimelog/partials/_form', ['submit_text' => trans('main.editupdate').' '.trans('main.dailytimelog.title'),'btn'=>trans('main.update')])
    {!! Form::close() !!}
@stop
