<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceConfig extends Model
{
    protected $fillable = ['key', 'value'];
}
