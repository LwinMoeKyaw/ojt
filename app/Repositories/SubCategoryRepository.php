<?php

namespace App\Repositories;

use App\Interfaces\SubCategoryInterface;
use App\Models\SubCategory;

class SubCategoryRepository implements SubCategoryInterface{

    public function all(){
        return SubCategory::all();
    }
    public function store()
    {
        $sub_categories = new SubCategory();
        $sub_categories->name = request()->name;
        $sub_categories->category_id = request()->category_id;
        $sub_categories->save();

    }
     public function findById($id)
     {
        return SubCategory::findOrFail($id);
     }
     public function update($id)
     {
        $sub_categories = $this->findById($id);
        $sub_categories->name = request()->name;
        $sub_categories->category_id = request()->category_id;
        $sub_categories->update();
     }
     public function destroy($id)
     {
        $sub_categories = $this->findById($id);
        $sub_categories->name = request()->name;
        $sub_categories->category_id = request()->category_id;
        $sub_categories->delete();

     }
}

?>
