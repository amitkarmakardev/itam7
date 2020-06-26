@inject('config', 'App\Http\Controllers\DeviceConfigController')
@extends('layouts.layout')

@section('subcontent')
    <section class="content-header">
        <h1>
            {{ ucwords($type) }} list <a href="{{ url('device', [$type, 'create']) }}">(+)</a>
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-striped" id="index">
                    <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Asset ID</th>
                        <th>Model</th>
                        <th>Serial No</th>
                        <th>IP</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>Tagged To</th>
                        <th>&nbsp;</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($devices as $device)
                        <tr>
                            <td>
                            <span class="label {{ strtolower($device->status) }}">{{ strtoupper($device->status[0]) }}</span>
                            </td>
                            <td><a class="font-weight-bold"
                                   href="{{ url('device', ['view',  $device->asset_id]) }}"
                                   target="_blank">{{ $device->asset_id }}</a>
                            </td>
                            <td>{{ $device->model }}</td>
                            <td>{{ $device->serial_no }}</td>
                            <td>{{ $device->ip }}</td>
                            <td>{{ $device->location }}</td>
                            <td>{{ $device->phone_no }}</td>
                            <td>{{ $device->owner }}</td>
                            <td class="status" ip="{{ $device->ip }}">
                                <i class="down fa fa-arrow-circle-down"></i>
                            </td>
                            <td><a href="{{ url('device', [$type, $device->id, 'edit']) }}"><i
                                            class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                @foreach($config->getValue('device_deployment_status', 'asc') as  $status)
                    <span class="label {{ strtolower($status) }}">{{ $devices->where('status'   , $status)->count() }}</span> {{ ucwords($status) }} &nbsp;
                @endforeach
            </div>
        </div>
    </section>
@stop

@section('js-code')
    <script>
        $(document).ready(function () {
            $('#index').DataTable(
                {
                    stateSave:true,
                    sorting: [[1, 'asc']],
                    columnDefs: [
                        {type: 'ip-address', targets: 4}
                    ]
                }
            );

            var checkIPStatus = function () {
                var ip_pool = '';
                $('.status').each(function (i, obj) {
                    var ip = $(obj).attr('ip');
                    if (ip !== '') {
                        ip_pool += ip + 'and';
                    }
                });
                $.get("{{ url('check-status') }}/" + ip_pool, function (data) {
                    data = JSON.parse(data);
                    for (var i = 0; i < data.length; i++) {
                        $("[ip='" + data[i] + "']").html('<i class="up fa fa-arrow-circle-up"></i>');
                    }
                });
            }

            setInterval(checkIPStatus, 10000);
        });
    </script>
@stop