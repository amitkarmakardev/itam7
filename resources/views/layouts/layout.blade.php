@inject('config', 'App\Http\Controllers\DeviceConfigController')
@inject('service', 'App\Services\SidebarService')

@extends('app')

@section('content')
<div class="wrapper" id="root">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="content-wrapper">
        @yield('subcontent')
    </div>
</div>
@stop