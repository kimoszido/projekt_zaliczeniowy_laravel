<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $category_list = Category::all();
        $product_list = Product::all();
        $img_list = DB::table('img_products')->get();

        return view('index')
            ->with("category_list", $category_list)
            ->with("product_list", $product_list)
            ->with("img_list", $img_list);
    }
}
