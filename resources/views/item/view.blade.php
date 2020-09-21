@inject('config', 'App\Http\Controllers\DeviceConfigController')
@extends('layouts.layout')

@section('subcontent')
<section class="content-header">
    <h1>
        <i class="{{ $item->icon_class }}"></i> {{ strtoupper($item->name) }}
    </h1>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                <div class="col-md-4"><h3>Current Stock</h3></div>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>Current stock</th>
                    <td>{{$item->stock }} </td>
                    <th>Total added</th>
                    <td>{{ $item->consumptions->where('type', 'add')->sum('no_of_items') }}</td>
                    <th>Total consumed</th>
                    <td>{{ $item->consumptions->where('type', 'consume')->sum('no_of_items') }}</td>
                </tr>
                <tr>
                </tr>
            </table>
        </div>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <h4>Item consumptions</h4>
            <table class="table table-striped">
                <tr>
                    <th>Date</th>
                    <th>Asset ID</th>
                    <th>Type</th>
                    <th>Consumption Details</th>
                    <th>No of Items</th>
                </tr>
                @foreach($items = $item->consumptions()->latest()->paginate(10) as $consumption)
                <tr>
                    <td>{{ $consumption->created_at->format('d/m/Y') }}</td>
                    <td><a href="{{ url('device', ['view',  $consumption->asset_id])}}" target="_blank">{{ $consumption->asset_id }}</a></td>
                    <td>{{ ucwords($consumption->type) }}</td>
                    <td>{{ $consumption->details }}</td>
                    <td>{{ $consumption->no_of_items }}</td>
                </tr>
                @endforeach
            </table>
            {!! $items->render() !!}
        </div>
    </div>
</section>

@stop