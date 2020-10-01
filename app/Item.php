<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=['name', 'location', 'buffer_stock'];

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function consumptions()
    {
        return $this->hasMany('App\ItemConsumption');
    }

    public function getStatusAttribute()
    {
        if($this->stock < $this->buffer_stock){
            return "Low";
        }else{
            return "Good";
        }
    }
}
