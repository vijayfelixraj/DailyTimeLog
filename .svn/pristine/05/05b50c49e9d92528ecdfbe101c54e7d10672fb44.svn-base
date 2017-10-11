@extends('layouts.app')
@section('title',trans('main.teamtimelog.title'))
@section('header')
    <h3>
        <i class="icon-message"></i>{!!trans('main.teamtimelog.title') !!}
    </h3>
@stop
@section('help')
    <p class="lead">{!!trans('main.teamtimelog.title') !!}</p>
    <p>{!!trans('main.teamtimelog.help') !!}</p>
@stop
@section('content')
    {!! Form::open(array('route' => array('main.teamtimelog.update',$teamtimelog->id),'method'=>'PUT','class' => 'form-vartical row-border','data-toggle'=>"validator",'files' => true)) !!}
    @include('teamtimelog/partials/_form', ['submit_text' => trans('main.editupdate').' '.trans('main.teamtimelog.title'),'btn'=>trans('main.update')])
    {!! Form::close() !!}
@stop
