<?php

namespace App\Http\Controllers;

use App\Device;
use App\Task;
use App\TaskProgress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class TaskController extends Controller
{
    public function index($type)
    {
        if($type==='completed'){
            $tasks = Task::where('completed_at', '<>', null)->latest()->paginate(10);
            return view('task.index', compact('tasks', 'type'));
        }else{
            $today = Task::where('completed_at', null)->whereRaw('DATE(updated_at) = CURDATE()')->get();
            $tasks = Task::where('completed_at', null)->whereRaw('DATE(updated_at) < CURDATE()')->latest()->paginate(100);
            return view('task.pending', compact('tasks', 'type', 'today'));
        }
    }

    public function create()
    {
        $asset_ids = Device::where('asset_id', '<>', null)->pluck('asset_id', 'asset_id')->toArray();
        return view('task.create', compact('asset_ids'));
    }

    public function view($id)
    {
        $task = Task::find($id);
        return view('task.view', compact('task'));
    }

    public function complete($id)
    {
        $task = Task::find($id);
        $task->completed_at = Carbon::now();
        $task->save();
        return redirect()->back();
    }

    public function save(Request $request)
    {
        $params = $request->validate(['description' => 'required', 'asset_id' => 'nullable']);
        $task = Task::create($params);
        return redirect(url('task', ['index', 'pending']));
    }

    public function createProgress(Request $request)
    {
        $tp = TaskProgress::create($request->all());
        $task = Task::find($tp->task_id);
        $task->updated_at = $tp->created_at;
        $task->save();
        return redirect()->back();
    }

    public function completeProgress($id)
    {
        $tp = TaskProgress::find($id);
        $tp->completed_at = Carbon::now();
        $tp->save();
        return redirect()->back();
    }

}