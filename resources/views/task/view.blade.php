@extends('layouts.layout')

@section('subcontent')

    <section class="content-header">
    <h1>Progress</h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <h4><a href="{{  url('task', ['index', 'pending']) }}">Tasks</a> / {{ $task->asset_id ? $task->asset_id : "Misc" }} / <span class="text-muted"> {{ $task->description }}</span><small>
                @foreach($task->tags as $tag)
                    <a class="label bg-green" href="{{ url('task', ['tag', $tag->name ]) }}">{{ $tag->name }}</a>
                @endforeach
                </small>
                </h4>
                <br>
                {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'url' =>  url('task/task-progress'), 'onsubmit' => "return confirm('Do you really want to submit the form?')"]) !!}
                    {!! Form::hidden('task_id', $task->id) !!}
                    <div class="form-group row">
                        <div class="col-md-8">
                            {!! Form::text('description', null, ['class' => 'form-control','placeholder' => 'Progress']) !!}
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                        </div>
                    </div>
                {!! Form::close() !!}
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>When</th>
                        <th>Description</th>
                        <th>Complete</th>
                    </tr>
                    @foreach($task->taskProgresses as $progress)
                        <tr>
                            <td style="width: 20%">{{ $progress->created_at->diffForHumans() }}</td>
                            <td>{{ $progress->description }}</td>
                            <td>
                                @if($progress->completed_at != null)
                                    <i class="fa fa-check"></i>
                                @else
                                    <a onclick="return confirm('Are you sure?')" href="{{ url('task', ['task-progress', 'complete', $progress->id])}}"><i class="fa fa-check-circle-o" style="color: green; font-size: 1.2em"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </section>
@stop
