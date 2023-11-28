<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Interfaces\CategoryInterface;
use App\Interfaces\SubCategoryInterface;

class SubCategoryController extends Controller
{
    public function __construct(
        private SubCategoryInterface $SubCategoryInterface,
        private CategoryInterface $CategoryInterface
    )
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = $this->SubCategoryInterface->all();

        return view('sub_categories.index', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('sub_categories.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->SubCategoryInterface->store();
        return redirect('sub_category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $sub_category = SubCategory::findOrFail($id);
        $categories = Category::all();
        // dd('hi');
        return view('sub_categories.edit', compact('sub_category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( string $id)
    {
      $this->SubCategoryInterface->update($id);
        return redirect('sub_category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $this->SubCategoryInterface->destroy($id);
        return redirect('sub_category');
    }
}
