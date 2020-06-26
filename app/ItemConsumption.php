<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemConsumption extends Model
{
    protected $fillable = ['asset_id', 'item_id', 'details', 'no_of_items', 'type'];

    public function item()
    {
        return $this->belongsTo('App\Item');
    }

}
