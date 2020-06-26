<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

/**
 * App\Task
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\TaskProgress[] $taskProgresses
 * @mixin \Eloquent
 */
class Task extends Model
{
    use HasTags;

    protected $fillable = ['asset_id', 'description'];

    protected $dates = ['completed_at'];

    public function isNew()
    {
    	if($this->latestProgress() == null && $this->completed_at == null){
    		return true;
    	}
    	return false;
    }

    public function latestProgress()
    {
    	return $this->taskProgresses()->latest()->first();
    }

    public function taskProgresses()
    {
        return $this->hasMany('App\TaskProgress');
    }
}
