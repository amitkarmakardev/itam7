<?php

namespace App\Http\Controllers;

use App\DeviceConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeviceConfigController extends Controller
{
    public function index($device)
    {
        if($device == 'device'){
            return view('config.device');
        }
        if($device =='department'){
            return view('config.department');
        }
        return view("config.device-config", compact('device'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['key' => 'required' , 'value' => 'required']);
        DeviceConfig::create($request->all());
        return redirect()->back();
    }

    public function get($key, $order='asc')
    {
        return DeviceConfig::where('key', $key)->orderBy('value', 'asc')->get();
    }

    public function getValue($key, $order='desc')
    {
        return DeviceConfig::where('key', $key)->orderBy('value', $order)->pluck('value', 'value');
    }
}
