<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return redirect(url('device', ['computer']));
});

Route::get('check-status/{host?}', function ($host) {
    $up = [];
    $host = trim(str_replace('and', ' ', $host));
    exec('nmap -sn -oG - ' . $host, $res);
    for ($i = 1; $i < count($res) - 1; $i++) {
        $arr = explode('(', $res[$i]);
        $status = trim(str_replace('Host: ', '', $arr[0]));
        array_push($up, $status);
    }
    echo json_encode($up);
});

Route::group(['prefix' => 'device/{type?}'], function () {
    Route::get('', 'DeviceController@index');
    Route::get('create', 'DeviceController@create');
    Route::get('{id}/edit', 'DeviceController@edit');
    Route::post('', 'DeviceController@save');
    Route::post('{id?}', 'DeviceController@update');
});
Route::get('device/view/{asset_id?}', 'DeviceController@view');

Route::group(['prefix' => 'task'], function () {
    Route::get('index/{type?}', 'TaskController@index');
    Route::get('create', 'TaskController@create');
    Route::get('view/{id?}', 'TaskController@view');
    Route::get('complete/{id?}', 'TaskController@complete');
    Route::post('', 'TaskController@save');

    Route::get('task-progress/complete/{id?}', 'TaskController@completeProgress');
    Route::post('task-progress', 'TaskController@createProgress');
});

Route::group(['prefix' => 'item'], function () {
    Route::get('', 'ItemController@index');
    Route::get('create', 'ItemController@create');
    Route::get('consumption', 'ItemController@consumption');
    Route::get('view/{id?}', 'ItemController@view');
    Route::get('{id?}', 'ItemController@edit');
    Route::post('', 'ItemController@save');
    Route::post('consume', 'ItemController@consume');
    Route::post('{id?}', 'ItemController@update');
});

Route::group(['prefix' => 'report'], function () {
    Route::get('consumption', 'ReportController@itemConsumption');
});


Route::group(['prefix' => 'config'], function () {
    Route::get('{device?}', 'DeviceConfigController@index');
    Route::post('', 'DeviceConfigController@store');
});


Route::get('ssh', function () {
    $ssh = new \phpseclib\Net\SSH2('192.168.40.10');
    if (!$ssh->login('array', 'admin')) {
        exit('Login Failed');
    }

//    echo $ssh->exec('?');
});
