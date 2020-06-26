@inject('config', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h4>Create department</h4>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('config')]) !!}
                <div class="form-group">
                    {!! Form::hidden('key', 'department') !!}
                    <label for="value">Department</label>
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
                    @foreach($config->get('department') as $data)
                        <tr>
                            <td>{{ $data->value }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $('.table').DataTable();
            });
        </script>
    </section>
@stop