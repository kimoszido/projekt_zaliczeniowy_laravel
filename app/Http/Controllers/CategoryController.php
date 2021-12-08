<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    protected static function categoryUp($actual_category){
        foreach($actual_category as $cat)
        {
            if($cat->level == 1)
            {
                $category_down = DB::table('categories')->select('id', 'name','level', 'id_up')->where('id_up', '=', $cat->id)->get();
                return $category_down;
            }
            else
            {
                return $cat;
            }
        }
    }

public static function viewMainCategory($name, $id)
    {
        $category_list = Category::all();
        $img_list = DB::table('img_products')->get();
        $actual_category = DB::table('categories')
            ->select('categories.id as id', 'categories.level as level', 'categories.name as name')
            ->where('categories.id_up', $id)
            ->get();
            print_r($actual_category);
        $categories = CategoryController::categoryUp($actual_category);
        $product_list = DB::table('products')
            ->join('category_products', 'products.id', 'category_products.id_product')
            ->join('categories', 'category_products.id_category', 'categories.id')
            ->select('products.id as id', 'products.name as name',
                    'products.is_avalible', 'products.price_netto', 'products.vat',
                    'category_products.id_category')
            ->get();

            return view('categoryMain')
                ->with("product_list", $product_list)
                ->with("category_list", $category_list)
                ->with("img_list", $img_list)
                ->with("actual_category", $actual_category);
    }

    public static function viewCategory($name, $id)
    {
        $category_list = Category::all();
        $img_list = DB::table('img_products')->get();
        $actual_category = DB::table('category_products')
            ->join('categories', 'category_products.id_category', 'categories.id')
            ->select('categories.id as id', 'categories.level as level', 'categories.name as name')
            ->where('category_products.id_category', $id)
            ->get();
        $categories = CategoryController::categoryUp($actual_category);
        $product_list = DB::table('products')
            ->join('category_products', 'products.id', 'category_products.id_product')
            ->join('categories', 'category_products.id_category', 'categories.id')
            ->select('products.id as id', 'products.name as name',
                    'products.is_avalible', 'products.price_netto', 'products.vat',
                    'category_products.id_category')
            ->get();

            return view('category')
                ->with("product_list", $product_list)
                ->with("category_list", $category_list)
                ->with("img_list", $img_list)
                ->with("actual_category", $categories);
    }

    public function category ($name, $id)
    {
        return CategoryController::viewCategory($name, $id);
    }

    public function categoryMain ($name, $id)
    {
        return CategoryController::viewMainCategory($name, $id);
    }

}
