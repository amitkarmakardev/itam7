@inject('config', 'App\Http\Controllers\DeviceConfigController')
@extends('layouts.layout')

@section('subcontent')
<section class="content-header">
    <h1>Items <a href="{{ url('item', ['create']) }}">(+)</a></h1>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-body">
            <table class="table table-striped datatable">
                <thead>
                    <tr class="text-uppercase">
                        <th>Item</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <!-- <th>Buffer</th> -->
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td class="item-box text-uppercase"><i class="{{ $item->icon_class }}"></i> &nbsp; <a href="{{ url('item', ['view', $item->id]) }}">{{ $item->name }}</a></td>
                        <td class="item-box text-primary">{{ $item->stock }}</td>
                        <td class="item-box ">
                            <span class="label @if($item->status == 'Low') label-warning @else label-success @endif">{{ $item->status }}</span>
                        </td>
                        <!-- <td class="item-box text-danger">{{ $item->buffer_stock }}</td> -->
                        <td class="item-box ">{{ $item->location }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <style>
                .item-box {
                    padding: 20px;
                }
            </style>
        </div>
    </div>
</section>
@stop

@section('js-code')
<script>
    // $('.datatable').DataTable();
</script>
@endsection