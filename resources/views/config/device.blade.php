@inject('config', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
<section class="content-header">
    <h4 class="title">Create device</h4>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <h4>List of Device</h4>
                    <br>
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' => url('config')]) !!}
                    <div class="form-group">
                        {!! Form::hidden('key', 'device') !!}
                        {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Create new Device']) !!}
                    </div>
                    {!! Form::close() !!}

                    <table class="table table-striped">
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
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <h4>Deployment Status</h4>
                    <br>
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' => url('config')]) !!}
                    <div class="form-group">
                        {!! Form::hidden('key', 'device_deployment_status') !!}
                        {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Create new Status']) !!}
                    </div>
                    {!! Form::close() !!}

                    <table class="table table-striped">
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