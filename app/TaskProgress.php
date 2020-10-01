<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TaskProgress
 *
 * @mixin \Eloquent
 */
class TaskProgress extends Model
{
    protected $table="task_progresses";
    protected $fillable = ['task_id','description'];
}
