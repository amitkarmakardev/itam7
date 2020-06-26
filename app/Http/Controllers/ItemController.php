<?php

namespace App\Http\Controllers;

use App\Item;
use App\Device;
use App\ItemConsumption;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('name', 'asc')->orderBy('stock', 'desc')->get();
        return view('item.index', compact('items'));
    }

    public function create()
    {
        return view('item.create');
    }

    public function save(Request $request)
    {
        Item::create($request->validate(['name' => 'required', 'details' => 'nullable', 'location' => 'required']));
        return redirect()->to(url('item'));
    }

    public function view($id)
    {
        $item = Item::find($id);
        return view('item.view', compact('item'));
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('item.edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $item = Item::find($id);
        $item->update($request->all());
        return redirect()->to(url('item', ['view', $item->id]));
    }

    public function consumption()
    {
        $items = Item::pluck('name', 'id');
        $asset_ids = Device::where('asset_id', '<>', null)->pluck('asset_id', 'asset_id');
        $consumptions = ItemConsumption::latest()->paginate(10);
        return view('item.consumption', compact('consumptions', 'items', 'asset_ids'));
    }

    public function consume(Request $request)
    {
        $item = Item::find($request->get('item_id'));
        if ($request->get('type') == 'add') {
            $item->stock = $item->stock + $request->get('no_of_items');
        } else {
            $item->stock = $item->stock - $request->get('no_of_items');
        }
        $item->save();

        ItemConsumption::create($request->validate(['asset_id' => 'nullable|exists:devices,asset_id', 'item_id' => 'required', 'details' => 'nullable', 'no_of_items' => 'required|numeric', 'type' => 'required']));
        return redirect()->back();
    }
}
