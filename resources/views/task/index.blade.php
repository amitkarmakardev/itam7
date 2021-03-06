﻿@extends('layouts.layout')

@section('page-refresh')
<meta http-equiv="Refresh" content="60">
@endsection


@section('subcontent')
    <section class="content-header">
        <h1>{{ ucwords($type) }} task list <a href="{{ url('task', ['create']) }}">(+)</a></h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-striped" id="index">
                    <thead>
                    <tr>
                        <th style="width: 10%">Asset ID</th>
                        <th style="width: 50%">Task</th>
                        <th style="width: 10%">Created</th>
                        <th style="width: 10%">Updated</th>
                        <th style="width: 18%">Complete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td><a href="{{ url('device', ['view',  $task->asset_id])}}" target="_blank" >{{ $task->asset_id }}</a> </td>
                            <td>
                                <a href="{{ url('task', ['view', $task->id]) }}" @if($task->isNew()) class="new" @endif>
                                    {{ $task->description }}
                                </a>
                                <br>
                                @if($task->latestProgress() != null)
                                    <small class="text text-warning">> {{ $task->latestProgress()->description }}</small>
                                @endif

                            </td>
                            <td>{{ $task->created_at->format('d/m/Y') }}</td>
                            <td>   
                                @if($task->latestProgress() != null)
                                    {{ $task->latestProgress()->created_at->diffForHumans() }} 
                                @endif
                            </td>
                            <td class="text-center">
                                @if($task->completed_at == null)
                                <a href="{{ url('task', ['complete', $task->id])}}"
                                   onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-check-circle-o" style="font-size: 1.2em; color: green"></i>
                                </a>
                                @else
                                {{ $task->completed_at->format('d/m/Y') }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $tasks->render() !!}
            </div>
        </div>
    </section>
@stop