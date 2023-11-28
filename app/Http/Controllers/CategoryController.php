<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryController extends Controller
{
    private $CategoryInterface;
    public function __construct(CategoryInterface $CategoryInterface)
    {
        $this->CategoryInterface = $CategoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = $this->CategoryInterface->all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->CategoryInterface->store();
        return redirect('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $categories = $this->CategoryInterface->findById($id);
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $id, Request $request)
    {
        $this->CategoryInterface->update($id);
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $this->CategoryInterface->destroy($id);
        return redirect('category');
    }
}
