@inject('config', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h1>
            Edit {{ ucwords( str_replace_last('-', ' ', $type)) }}
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h4>Device Details</h4>
            </div>
            <div class="box-body">
                {!! Form::model($device, ['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('device', [$type, $device->id])]) !!}
                @include('device.form')
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop
@section('js-code')
    <script>
        $('.ip').inputmask("ip");
    </script>
@stop