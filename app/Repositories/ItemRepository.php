<?php

namespace App\Repositories;

use App\Interfaces\ItemInterface;
use App\Models\Item;

class ItemRepository implements ItemInterface{


    public function all(){
        return Item::all();
    }
    public function store()
    {
        $items = new Item();
        $items->name = request()->name;
        $items->category_id = request()->category_id;
        $items->sub_category_id = request()->sub_category_id;
        $items->save();
    }
    public function findById($id)
    {
        return Item::findOrFail($id);
    }
    public function update($id)
    {
        $items = $this->findById($id);
        $items->name = request()->name;
        $items->category_id = request()->category_id;
        $items->sub_category_id = request()->sub_category_id;
        $items->update();

    }
    public function destroy($id)
    {
        $items = $this->findById($id);
        $items->name = request()->name;
        $items->category_id = request()->category_id;
        $items->sub_category_id = request()->sub_category_id;
        $items->delete();

    }
}

?>
