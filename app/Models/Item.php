<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);

    }
    public function sub_category(){
        return $this->belongsTo(SubCategory::class);

    }


}
