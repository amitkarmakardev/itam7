@inject('config', 'App\Http\Controllers\DeviceConfigController')
@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h1>
            Create a {{ ucwords( str_replace_last('-', ' ', $type)) }}
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('device', [$type])]) !!}
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