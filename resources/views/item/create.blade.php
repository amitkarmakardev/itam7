@inject('config', 'App\Http\Controllers\DeviceConfigController')
@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h1> Create an Item </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('item')]) !!}
                @include('item.form')
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop
