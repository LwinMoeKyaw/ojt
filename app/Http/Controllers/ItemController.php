<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Interfaces\ItemInterface;

class ItemController extends Controller
{
    public function __construct(
        private ItemInterface $ItemInterface,

    )
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $items = $this->ItemInterface->all();
        // dd($items->all());
        return view('items.index', compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        return view('items.create', compact('categories','sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->ItemInterface->store();
        return redirect('item');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->ItemInterface->update($id);
        return redirect('item');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $items = Item::findOrFail($id);
        return view('items.edit', compact('categories','sub_categories','items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->ItemInterface->update($id);
        return redirect('item');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->ItemInterface->destroy($id);
        return redirect('item');
    }
}
