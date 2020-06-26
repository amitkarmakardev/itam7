@inject('config', 'App\Http\Controllers\DeviceConfigController')

@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h1>{{ $device->asset_id}} &nbsp; <a href="{{ url('device', [$device->type, $device->id, 'edit'])}}"><small><i class="fa fa-edit"></i></small></a></h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @foreach($device->toArray() as $key=>$value)
                    @if(is_array($value) == false)
                    <div class="col-md-2">
                        <h5 class="text-primary">{{ strtoupper(str_replace('_', ' ', $key)) }} :</h5>
                    </div>
                    <div class="col-md-4">
                        <h5>{{ ucwords($value) }}&nbsp;</h5>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-body">

            <table class="table table-striped">
                <tr>
                    <th>Item</th>
                    <th>Consumed On</th>
                    <th>No</th>
                    <th>Details</th>
                </tr>
                @foreach($consumptions = $device->consumptions()->paginate(10) as $item)
                    <tr>
                        <td>{{ $item->item->name}}</td>
                        <td>{{ $item->created_at->format('d/m/Y')}}</td>
                        <td>{{ $item->no_of_items }}</td>
                        <td>{{ $item->details}} </td>
                    </tr>                                        
                @endforeach
            </table>
            {!! $consumptions->links() !!}
            </div>
        </div>
    </section>
@stop

@section('js-code')
@stop