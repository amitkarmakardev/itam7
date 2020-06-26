@inject('controller', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Create device type</h4>
            </div>
            <div class="content">
                {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('config')]) !!}
                <div class="form-group">
                    <label for="model">Device</label>
                    <select name="key" id="key" class="form-control">
                        @foreach($controller->get('device') as $obj)
                            <option value="{{ $obj->value."_type" }}">{{ $obj->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="value">Subtype</label>
                    {!! Form::text('value', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::close() !!}

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Device</th>
                        <th>Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($controller->get('_type') as $data)
                        <tr>
                            <td>{{ $data->key }}</td>
                            <td>{{ $data->value }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop