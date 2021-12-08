<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Product;


class Category extends Model
{
    use HasFactory;
    public function category()
    {
    	return $this->belongsToMany(Product::class, 'category_products', 'id_category');
    }

    public function selectName()
    {
        return DB::table('category')->select('name');
    }
}
