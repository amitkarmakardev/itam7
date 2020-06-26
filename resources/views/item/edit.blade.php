@inject('config', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h1>Edit: {{ $item->name  }}</h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($item, ['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('item', [$item->id])]) !!}
                @include('item.form')
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop
