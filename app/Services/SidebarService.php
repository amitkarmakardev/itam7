<?php

namespace App\Services;

use App\Item;

class SidebarService{

    public function getItems(){
        return Item::orderBy('name')->get();
    }

}