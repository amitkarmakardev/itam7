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
                        <tr>
                            <th>Item</th>
                            <th>Stock</th>
                            <th>Buffer</th>
                            <th>Indication</th>
                            <th>Location</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td class="text-uppercase"><a href="{{ url('item', ['view', $item->id]) }}">{{ $item->name }}</a></td>
                            <td class="text-primary">{{ $item->stock }}</td>
                            <td class="text-danger">{{ $item->buffer_stock }}</td>
                            <td><span class="label label-warning">{{ $item->status }}</span></td>
                            <td>{{ $item->location }}</td>
                            <td><a href="{{ url('item', [$item->id]) }}"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop

@section('js-code')
    <script>
        $('.datatable').DataTable();
    </script>
@endsection
