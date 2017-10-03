@extends('layout.login')
@section('content')
@include('errors.list')
@if( Session::has('flash_message'))
    <div class="alert alert-success {{Session::has('flash_message_importance')?'alert-important':''}}">
        @If( Session::has('flash_message_important'))
        <button type="button" class="close" data-dismiss="left" aria-hidden ="true">&times;</button>
        @endif
        {{Session::get('flash_message')}}
    </div>
@endif

    {!! Form::model($users,['method'=>'PATCH','action'=>['HomeController@update'],'files'=>true]) !!}
@include('home.personalform')
{!! Form::close() !!}
@endsection
