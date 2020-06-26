<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Device
 *
 * @property-write mixed $machine_name
 * @property-write mixed $serial_no
 * @mixin \Eloquent
 */
class Device extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function setSerialNoAttribute($value)
    {
        $this->attributes['serial_no'] = strtoupper($value);
    }

    public function consumptions(){
        return $this->hasMany('App\ItemConsumption', 'asset_id', 'asset_id')->latest();
    }

}
