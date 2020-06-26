@inject('controller', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
<section class="content-header">
    <h4 class="title">Create {{ $device }} configs</h4>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <h4>Type</h5>
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('config')]) !!}
                    {!! csrf_field() !!}
                    <input type="hidden" name="key" value="{{ $device }}_type">
                    <div class="form-group">
                        {!! Form::text('value', null, ['class' => 'form-control']) !!}
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
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <h4>OS</h5>
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('config')]) !!}
                    {!! csrf_field() !!}
                    <input type="hidden" name="key" value="{{ $device }}_os">
                    <div class="form-group">
                        {!! Form::text('value', null, ['class' => 'form-control']) !!}
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
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <h4>Model</h5>
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('config')]) !!}
                    {!! csrf_field() !!}
                    <input type="hidden" name="key" value="{{ $device }}_model">
                    <div class="form-group">
                        {!! Form::text('value', null, ['class' => 'form-control']) !!}
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