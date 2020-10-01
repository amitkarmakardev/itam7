@inject('controller', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
<section class="content-header">
    <h4 class="title">Create {{ $device }} configs</h4>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <h4>Device Icon</h5><br>
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' => url('config')]) !!}
                        {!! csrf_field() !!}
                        <input type="hidden" name="key" value="{{ $device }}_icon">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::text('value', $controller->getValue($device.'_icon')->first(), ['class' => 'form-control', 'placeholder' => 'Icon Class']) !!}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <i class="{{ $controller->getValue($device.'_icon')->first() }}" style="font-size: 2.5em"></i>

                            </div>
                        </div>
                        {!! Form::close() !!}
                        <br>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <h4>List of {{ ucwords($device) }} Type</h5><br>
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' => url('config')]) !!}
                        {!! csrf_field() !!}
                        <div class="form-group">
                            {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Create new']) !!}
                        </div>
                        {!! Form::close() !!}

                        <table class="table table-striped">
                            <tbody>
                                @foreach($controller->get($device.'_type') as $data)
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
                    <h4>List of {{ ucwords($device) }} OS</h5><br>
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' => url('config')]) !!}
                        {!! csrf_field() !!}
                        <input type="hidden" name="key" value="{{ $device }}_os">
                        <div class="form-group">
                            {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Create new']) !!}
                        </div>
                        {!! Form::close() !!}

                        <table class="table table-striped">
                            <tbody>
                                @foreach($controller->get($device.'_os') as $data)
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
                    <h4>List of {{ ucwords($device) }} Model</h5><br>
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' => url('config')]) !!}
                        {!! csrf_field() !!}
                        <input type="hidden" name="key" value="{{ $device }}_model">
                        <div class="form-group">
                            {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Create new']) !!}
                        </div>
                        {!! Form::close() !!}

                        <table class="table table-striped">
                            <tbody>
                                @foreach($controller->get($device.'_model') as $data)
                                <tr>
                                    <td>{{ $data->value }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</section>
@stop