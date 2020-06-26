@inject('config', 'App\Http\Controllers\DeviceConfigController')
@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h1>Item consumption</h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('item', ['consume'])]) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('type', 'Type') !!}
                                    {!! Form::select('type', ['add' => 'Add', 'consume' => 'Consume'], 'consume', ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('asset_id', 'Asset ID') !!}
                                    {!! Form::select('asset_id', $asset_ids, null,['class' => 'assets']) !!}
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    {!! Form::label('item_id', 'Item') !!}
                                    {!! Form::select('item_id', $items, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('details', 'Details') !!}
                            {!! Form::text('details', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            {!! Form::label('no_of_items', 'No') !!}
                            {!! Form::number('no_of_items', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-fill', 'style' => 'margin-top: 24px;']) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Asset</th>
                        <th>Item</th>
                        <th>Consumption Details</th>
                        <th>No of Items</th>
                    </tr>
                    @foreach($consumptions as $consumption)
                        <tr>
                            <td>{{ $consumption->created_at->format('d/m/Y') }}</td>
                            <td>{{ ucwords($consumption->type) }}</td>
                            <td><a href="{{ url('device', ['view',  $consumption->asset_id])}}" target="_blank" >{{ $consumption->asset_id }}</a></td>
                        <td><a href="{{ url('item', ['view', $consumption->item_id]) }}">{{ $consumption->item->name }}</td></a>
                            <td>{{ $consumption->details }}</td>
                            <td>{{ $consumption->no_of_items }}</td>
                        </tr>
                    @endforeach
                </table>
                {!! $consumptions->links() !!}
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

        $('#item_id').selectize({
            create: false,
            sortField: 'text'
        });

    </script>
@endsection