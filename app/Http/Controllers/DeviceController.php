<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeviceController extends Controller
{
    public function index($type)
    {
        $devices = Device::where('type', $type)->orderBy('asset_id', 'desc')->get();
        return view('device.device', compact('devices', 'type'));
    }

    public function create($type)
    {
        return view('device.create', compact('type'));
    }

    public function save(Request $request, $type)
    {
        $device = Device::create($request->all());
        return redirect()->to(url('device', ['view', $device->asset_id] ));
    }

    public function edit($type, $id)
    {
        $device = Device::find($id);
        return view('device.edit', compact('device', 'type'));
    }

    public function view($asset_id){
        $device = Device::where('asset_id', $asset_id)->with('consumptions.item')->first();
        return view('device.view', compact('device'));
    }

    public function deployment(Request $request)
    {
        $params = $request->validate(['device_id' => 'required', 'status' => 'required', 'comment' => 'nullable']);
        DeviceStatus::create($params);
        return redirect()->back();
    }

    public function update($type, $id, Request $request)
    {
        $device = Device::find($id);
        $device->update($request->all());
        return redirect()->to(url('device', ['view', $device->asset_id] ));
    }
}
