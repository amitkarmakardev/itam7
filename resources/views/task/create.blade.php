@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h1>Create a task</h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('task')]) !!}
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            {!! Form::label('asset_id', 'Asset ID') !!}
                            {!! Form::select('asset_id', ['' => ''] + $asset_ids, null,['class' => 'assets']) !!}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::label('description', 'Task') !!}
                            {!! Form::text('description', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="margin-top: 25px">Submit
                            </button>
                        </div>
                    </div>
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop

@section('js-code')
    <script>

        $('.assets').selectize({
            create: false,
            sortField: 'text'
        });
    </script>
@endsection