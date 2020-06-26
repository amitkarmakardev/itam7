@inject('config', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
<section class="content-header">
    <h4 class="title">Create device</h4>
</section>
<section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('config')]) !!}
                        <div class="form-group">
                            {!! Form::hidden('key', 'device') !!}
                            <label for="value">Device</label>
                            {!! Form::text('value', null, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::close() !!}

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Device List</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($config->get('device') as $data)
                                <tr>
                                    <td>{{ $data->value }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('config')]) !!}
                        <div class="form-group">
                            {!! Form::hidden('key', 'device_deployment_status') !!}
                            <label for="value">Deployment Status</label>
                            {!! Form::text('value', null, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::close() !!}

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Deployment Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($config->get('device_deployment_status') as $data)
                                <tr>
                                    <td>{{ $data->value }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</section>
@stop