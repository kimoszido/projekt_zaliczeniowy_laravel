<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductContactController extends Controller
{
    public function productContact($id_product)
    {
        $category_list = Category::all();
        $product_list = Product::all();
        $img_list = DB::table('img_products')->get();

        return view('productContact')
            ->with("category_list", $category_list)
            ->with("product_list", $product_list)
            ->with("img_list", $img_list);
    }

    public function Contact()
    {
        $category_list = Category::all();
        $product_list = Product::all();
        $img_list = DB::table('img_products')->get();

        return view('productContact')
            ->with("category_list", $category_list)
            ->with("product_list", $product_list)
            ->with("img_list", $img_list);
    }

}
